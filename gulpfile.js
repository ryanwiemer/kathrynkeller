// Include gulp
var gulp = require('gulp');

// Include The Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var bourbon = require('node-bourbon');
var neat = require('node-neat');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

gulp.task('browser-sync', function() {
  //watch files
  var files = [
    'assets/css/*.css',
    'assets/js/*.js',
    '*.php'
  ];
  //initialize browsersync
  browserSync.init(files, {
  //browsersync with a php server
  proxy: "kathrynkellerartist.dev",
  notify: false,
  open: false
  });
});

// Move And Minfiy Scripts From Bower
gulp.task ('move', function() {
  gulp.src(['bower_components/picturefill/dist/picturefill.min.js','bower_components/jquery/dist/jquery.min.js','bower_components/responsive-nav/responsive-nav.min.js','bower_components/jquery-validate/dist/jquery.validate.min.js','bower_components/jquery-form/jquery.form.js','bower_components/salvattore/dist/salvattore.js','bower_components/slick-carousel/slick/slick.js','bower_components/PACE/pace.min.js'])
    .pipe(gulp.dest('assets/js/vendor/'));
});

//Lint JS
gulp.task('scripts', function() {
  gulp.src(['assets/js/scripts/*.js'])
    .pipe(jshint())
    .pipe(jshint.reporter('default'))
    .pipe(browserSync.reload({stream:true}));
});

// Concat JS
gulp.task('concat', function() {
  gulp.src(['assets/js/vendor/pace.min.js','assets/js/vendor/picturefill.min.js','assets/js/vendor/responsive-nav.min.js','assets/js/vendor/jquery.min.js','assets/js/scripts/menu--settings.js'])
    .pipe(concat('global.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js/'));
  gulp.src(['assets/js/vendor/jquery.form.js','assets/js/scripts/jquery.form.settings.js','assets/js/vendor/jquery.validate.min.js','assets/js/scripts/contact--settings.js'])
    .pipe(concat('contact.min.js'))
		.pipe(uglify())
    .pipe(gulp.dest('assets/js/'));
  gulp.src(['assets/js/vendor/slick.js','assets/js/scripts/home--settings.js'])
    .pipe(concat('home.min.js'))
  	.pipe(uglify())
  	.pipe(gulp.dest('assets/js/'));
  gulp.src(['assets/js/vendor/salvattore.js'])
    .pipe(concat('work.min.js'))
  	.pipe(uglify())
  	.pipe(gulp.dest('assets/js/'));
});

// Compile Sass & Minify CSS
gulp.task('sass', function() {
  gulp.src(['assets/scss/style.scss'])
    .pipe(sass({
        includePaths: require('node-neat').includePaths
     }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 9', 'opera 12.1'))
    .pipe(minifycss())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/css/'))
    .pipe(browserSync.reload({stream:true}));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/scss/*/*.scss', ['sass'])
    gulp.watch('assets/js/*/*.js', ['scripts','concat'])
    gulp.watch('.php').on('change', reload);
});

// Default Task
gulp.task('default', ['sass','scripts','concat', 'browser-sync', 'watch']);

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
var lr = require('tiny-lr');
var livereload = require('gulp-livereload');
var autoprefixer = require('gulp-autoprefixer');

// Move And Minfiy Scripts From Bower
gulp.task ('move', function() {
    gulp.src(['bower_components/picturefill/dist/picturefill.min.js','bower_components/jquery/dist/jquery.min.js','bower_components/responsive-nav/responsive-nav.min.js','bower_components/jquery-validate/dist/jquery.validate.min.js','bower_components/jquery-form/jquery.form.js','bower_components/slick.js/slick/slick.min.js','bower_components/mixitup/build/jquery.mixitup.min.js'])
	    .pipe(gulp.dest('assets/js/vendor/'));
});

// Lint JS
gulp.task('scripts', function() {
    gulp.src(['assets/js/scripts/*.js'])
      .pipe(jshint())
      .pipe(jshint.reporter('default'))
      .pipe(uglify())
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest('assets/js/'))
      .pipe(livereload());
});

// Concat JS
gulp.task('concat', function() {
    gulp.src(['assets/js/vendor/picturefill.min.js','assets/js/vendor/responsive-nav.min.js','assets/js/vendor/jquery.min.js','assets/js/scripts/menu.js'])
      .pipe(concat('global.min.js'))
      .pipe(uglify())
      .pipe(gulp.dest('assets/js/'));
    gulp.src(['assets/js/vendor/jquery.form.js','assets/js/scripts/jquery.form.settings.js','assets/js/vendor/jquery.validate.min.js'])
  		.pipe(concat('contact.min.js'))
  		.pipe(uglify())
  		.pipe(gulp.dest('assets/js/'));
});

// Compile Sass & Minify CSS
gulp.task('sass', function() {
    gulp.src(['assets/scss/style.scss'])
      .pipe(sass({
          includePaths: require('node-neat').includePaths
       }))
      .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1'))
      .pipe(minifycss())
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest('assets/css/'))
      .pipe(livereload());
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/scss/*/*.scss', ['sass'])
    gulp.watch('assets/js/*/*.js', ['scripts', 'concat']);
});

// Default Task
gulp.task('default', ['sass','scripts','concat', 'watch']);

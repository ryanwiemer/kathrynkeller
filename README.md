#README

WordPress theme built for Kathryn Keller. Information about the project and how to set it up on a local Machine.

###Dependencies
- Git
- Node.js
- Gulp
- Bower

###Mac Installation
- Create a MySQL database for WordPress
- Download WordPress from: https://wordpress.org/
- Install WordPress and configure it to connect to the new database
- Clone the repository into the following location: wp-content/themes/
- Login to the WordPress backend and navigate to Appearance > Themes and set it to use the Kathryn Keller Theme
- Git - Download and install from: https://git-scm.com/
- Node.js - Download and install from: http://nodejs.org
- Gulp - Install Gulp globally `npm install -g gulp`
- Bower - Install Bower globally `npm install -g bower`

###Running Project From Repository
- CD into the project folder
- Install Bower Dependencies - `bower install`
- Install NPM Packages - `npm install`
- If your local environment address is something other than kathrynkellerartist.dev you may need to update the proxy in [gulpfile.js](https://github.com/ryanwiemer/kathrynkeller/blob/master/gulpfile.js#L27)
- Run `gulp` in order to start watching files and launch a proxy server at http://localhost:3000/

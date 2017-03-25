'use strict';

// require
var gulp = require('gulp');							            // gulp
var tinypng = require('gulp-tinypng-compress');     // tinypng
var plumber = require('gulp-plumber');				      // plumber
var gulpConcat = require('gulp-concat');			      // concat
var gulpUglify = require('gulp-uglify');			      // uglify
var sourcemaps = require('gulp-sourcemaps');		    // sourcemaps
var autoprefixer = require('gulp-autoprefixer');	  // autoprefixr
var sass = require('gulp-sass');					          // sass
var browserSync = require('browser-sync').create(); // browserSync
var babel = require("gulp-babel");                  // babel

// tasks
// concat + min js scripts
gulp.task('concatScripts', function() {
	gulp.src([
			// include all js/plugins files
			'js/vendor/*.js',
			// don't include
			'!js/vendor/jquery-1.12.0.min.js',
			'!js/vendor/modernizr.2.8.3.min.js',
			// include main.js
			'js/main.js'
		])
  .pipe(sourcemaps.init())
  .pipe(babel())
	.pipe(plumber())
	.pipe(gulpConcat('main.min.js'))
	.pipe(gulpUglify())
  .pipe(sourcemaps.write("."))
	.pipe(gulp.dest('js'))
  .pipe(browserSync.stream());
});

// sass
gulp.task('compileSass', function() {
	gulp.src('sass/style.scss')
		// pipe sourcemaps to sass
		.pipe(sourcemaps.init())
		.pipe(plumber())
		// .pipe(sass({outputStyle: 'compressed'}))
		.pipe(sass())
		// pipe prefixr
		.pipe(autoprefixer({
			browsers: ['last 2 versions', 'IE 9'],
			cascade: false
		}))
		// write sourcemaps
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./'))
    // reload browser
    .pipe(browserSync.stream());
});

// tinypng
gulp.task('tinypng', function () {
  gulp.src('images/**/*.{png,jpg,jpeg}')
   .pipe(tinypng({
     key: 'P6DZZE3SETe9ttfHXWJ48AwFpz4chgC8',
     log: true,
     sameDest: true,
     sigFile: 'images/.tinypng-sigs'

  }))
  .pipe(gulp.dest('images'));
});

// watchFiles
gulp.task('watchFiles', function() {
	gulp.watch('style.scss', ['compileSass']);
	gulp.watch('sass/**/*.scss', ['compileSass']);
	gulp.watch(['js/**/*.js', '!js/main.min.js'], ['concatScripts']);
  gulp.watch('*.php').on('change', browserSync.reload); // reload browser on php changes
  gulp.watch('*.html').on('change', browserSync.reload); // reload browser on php changes
});

// reload browser init
gulp.task('browser-sync', function() {
  browserSync.init({
    notify: false, // remove notification from front end
    proxy: "localhost/cafune" // add server here
  });
});

// default task
gulp.task('default', ['watchFiles', 'browser-sync']);

// final build task
gulp.task('build', ['compileSass', 'concatScripts','tinypng']);

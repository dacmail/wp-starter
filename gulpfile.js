'use strict';
var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('sass', function () {
  return gulp.src('./assets/styles/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS())
    .pipe(gulp.dest('./css'));
});


gulp.task('js', function() {
  return gulp.src([
      './assets/scripts/main.js',
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    .pipe(gulp.dest('./js/'))
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./js/'));
});


gulp.task('watch', function () {
  gulp.watch('./assets/styles/*.scss', ['sass']);
  gulp.watch('./assets/scripts/*.js', ['js']);
});

'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var minify = require('gulp-minify');
var notify = require('gulp-notify');

var paths = {
    css_dev: './assets/sass/**/*.scss',
    css_dist: './public_html/assets/css',
    js_dev: './assets/js/**/*.js',
    js_dist: './public_html/assets/js',
};

var vendor_scripts = ['./node_modules/classlist-polyfill/src/index.js'];

gulp.task('sass', function () {
    return gulp.src(paths.css_dev)
        .pipe(sass().on('error', sass.logError))
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest(paths.css_dist))
        .pipe(notify('SASS concati-piled!'));
});

gulp.task('scripts_vendors', function () {
    return gulp.src(vendor_scripts)
        .pipe(concat('vendors.nativedsd.js'))
        .pipe(minify())
        .pipe(gulp.dest(paths.js_dist))
        .pipe(notify('VENDORS concati-piled!'));
});

gulp.task('scripts', function () {
    return gulp.src(paths.js_dev)
        .pipe(concat('main.js'))
        .pipe(minify())
        .pipe(gulp.dest(paths.js_dist))
        .pipe(notify('JavaScript concati-piled!'));
});

gulp.task('watch', function () {
    gulp.watch(paths.css_dev, ['sass']);
    gulp.watch(paths.js_dev, ['scripts']);
});

gulp.task('default', ['watch']);

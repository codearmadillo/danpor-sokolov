var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    util = require('gulp-util')

    watch = {
        'stylesheet':'build/css/**/*.scss',
        'javascript':'build/js/**/*.js'
    },

    input  = {
        'stylesheet':'build/css/default.scss',
        'javascript':'build/js/**/*.js'
    },

    output = {
        'stylesheet':'dest/css/',
        'javascript':'dest/js/'
    };

gulp.task('default', ['scss','javascript','watch']);

gulp.task('scss',function(){
    return gulp.src(input.stylesheet)
    .pipe(util.env.type === 'production' ? util.noop() : sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(util.env.type === 'production' ? util.noop() : sourcemaps.write())
    .pipe(gulp.dest(output.stylesheet));
});

gulp.task('javascript', function(){
    return gulp.src(input.javascript)
    .pipe(util.env.type === 'production' ? util.noop() : sourcemaps.init())
    .pipe(concat('bundle.js'))
    .pipe(util.env.type === 'production' ? uglify() : util.noop())
    .pipe(util.env.type === 'production' ? util.noop() : sourcemaps.write())
    .pipe(gulp.dest(output.javascript));
});

gulp.task('watch', function(){
    gulp.watch(watch.stylesheet, ['scss']);
    gulp.watch(watch.javascript, ['javascript']);
});
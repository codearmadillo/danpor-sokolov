var gulp = require('gulp'),
  sass = require('gulp-sass'),
  uglify = require('gulp-uglify'),
  concat = require('gulp-concat'),
  sourcemaps = require('gulp-sourcemaps'),
  autoprefixer = require('gulp-autoprefixer'),
  util = require('gulp-util')

  watch = {
    'stylesheet':'src/css/**/*.scss',
    'javascript':'src/js/**/*.js'
  },
  input  = {
    'stylesheet':'src/css/default.scss',
    'javascript':'src/js/**/*.js'
  },
  output = {
    'stylesheet':'dest/',
    'javascript':'dest/'
  },
  production = {
    'stylesheet':'dest/',
    'javascript':'dest/'
  };

/** Default task */
gulp.task('default', ['scss','javascript','watch']);

/** SCSS */
gulp.task('scss',function(){
    return gulp.src(input.stylesheet)
    .pipe(util.env.type === 'production' ? util.noop() : sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(util.env.type === 'production' ? util.noop() : sourcemaps.write())
    .pipe(util.env.type === 'production' ? gulp.dest(production.stylesheet) : gulp.dest(output.stylesheet));
});

/** Javascript */
gulp.task('javascript', function(){
    return gulp.src(input.javascript)
    .pipe(util.env.type === 'production' ? util.noop() : sourcemaps.init())
    .pipe(concat('bundle.js'))
    // .pipe(util.env.type === 'production' ? uglify() : util.noop())
    .pipe(util.env.type === 'production' ? util.noop() : sourcemaps.write())
    .pipe(util.env.type === 'production' ? gulp.dest(production.javascript) : gulp.dest(output.javascript));
});

gulp.task('watch', function(){
    gulp.watch(watch.stylesheet, ['scss']);
    gulp.watch(watch.javascript, ['javascript']);
});
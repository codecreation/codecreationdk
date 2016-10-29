var gulp = require('gulp');
var gutil = require('gulp-util');
/*var babel = require('gulp-babel');*/
var fs = require("fs");
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var browserify = require("browserify");
var reload = browserSync.reload;
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');

/*****************
 /* TASKS
 /*****************/
gulp.task('browser-sync', function() {
  browserSync({
    proxy: 'http://localhost:8083'
  });
});

/**
 * Compile function for the JavaScript.
 */
gulp.task('javascript', function () {
  return browserify('site/script.js')
    .transform("babelify", {presets: ["es2015"]})
    .bundle().on('error', gutil.log.bind(gutil, 'Error'))
    .pipe(fs.createWriteStream('site/script.min.js'));
});

gulp.task('stylesheets', function () {
  gulp.src('site/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass()).on('error', gutil.log.bind(gutil, 'Error'))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    })).on('error', gutil.log.bind(gutil, 'Error'))
    .pipe(minifyCSS())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('site/'))
    .pipe(reload({stream: true}));
});

gulp.task('default', ['javascript', 'stylesheets', 'browser-sync'], function() {
  gulp.watch('site/script.js', ['javascript']);
  gulp.watch('site/style.scss', ['stylesheets']);
});
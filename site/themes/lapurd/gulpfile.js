var gulp = require('gulp');
var gutil = require('gulp-util');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
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

gulp.task('stylesheets', function () {
  gulp.src('assets/sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass()).on('error', gutil.log.bind(gutil, 'Error'))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    })).on('error', gutil.log.bind(gutil, 'Error'))
    .pipe(minifyCSS())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('assets/css/'))
    .pipe(reload({stream: true}));
});

gulp.task('default', ['stylesheets', 'browser-sync'], function() {
  gulp.watch('assets/sass/style.scss', ['stylesheets']);
  gulp.watch('assets/sass/**/*.scss', ['stylesheets']);
});
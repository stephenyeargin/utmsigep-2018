var gulp = require('gulp')
var sass = require('gulp-sass')
var concat = require('gulp-concat')
var rename = require('gulp-rename')
var cleanCSS = require('gulp-clean-css')

var paths = {
  styles: {
    src: 'assets/scss/**/*.scss',
    dest: 'assets/css/'
  }
}

function styles () {
  return gulp.src(paths.styles.src)
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(gulp.dest(paths.styles.dest))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({
      basename: 'style',
      suffix: '.min'
    }))
    .pipe(gulp.dest(paths.styles.dest))
}

function watch () {
  gulp.watch(paths.styles.src, styles)
}

exports.styles = styles
exports.watch = watch

var build = gulp.series(styles)

gulp.task('build', build)

gulp.task('default', watch)

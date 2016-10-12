const gulp = require('gulp'),
      sass = require('gulp-sass'),
      cssnano = require('gulp-cssnano'),
      watch = require('gulp-watch'),
	  runSequence = require('run-sequence');

gulp.task('sass', () => {
  return gulp.src('./style/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./style'));
});
 
gulp.task('cssnano', () => {
    return gulp.src('./style/**/*.css')
        .pipe(cssnano({
            discardComments: {removeAll: false}
        }))
        //.pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./'));
});

gulp.task('watch', () => {
  gulp.watch('./style/**/*.scss', ['buildcss']);
});

gulp.task('buildcss', () => {
    runSequence('sass', 'cssnano', () => {
        console.log('========================== Build completed ==========================');
    });
});
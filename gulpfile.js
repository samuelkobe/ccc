var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');
gulp.task('sass', function(){
  return gulp.src('./wp-content/themes/html5blank-child/style.scss')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('./wp-content/themes/html5blank-child/'))
});
//Watch task
gulp.task('sass:watch',function() {
    gulp.watch('./wp-content/themes/html5blank-child/**/*.scss', ['sass']);
});

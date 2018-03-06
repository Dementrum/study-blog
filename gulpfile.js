var gulp = require('gulp');
var csso = require('gulp-csso');

gulp.task('default', function() {
	return gulp.src('css/*.css')
	.pipe(csso())
	.pipe(gulp.dest('./build/css'))
});

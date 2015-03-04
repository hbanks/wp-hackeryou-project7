var gulp = require('gulp');
var sass = require('gulp-sass');

// here we define the list of things to happen when we run gulp styles
gulp.task('styles', function(){
	gulp.src('wp-content/themes/project7/style.scss')
		.pipe(sass())
		.pipe(gulp.dest('wp-content/themes/project7/'))
}); 

gulp.task('watch', function(){
	gulp.watch('wp-content/themes/project7/style.scss', ['styles']);
});
const gulp = require('gulp');
const { src, dest } = require('gulp');
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const sass = require('gulp-sass');
const rename = require("gulp-rename");
const watch = require('gulp-watch');

//compile sass and autoprefixer 
gulp.task('css', function () {
    return gulp.src('views/sass/**.scss')
        .pipe(sass())
        .pipe(rename({basename:"style"}))
        .pipe(autoprefixer('last 2 version'))
        .pipe(dest('views/css'))
});

//compressed
gulp.task('comp', function () {
    return gulp.src('views/css/style.css')
        .pipe(sass(({outputStyle: 'compressed'})))
        .pipe(rename({basename:"Fstyle"}))
        .pipe(dest('views/css/'))
});



//watch
gulp.task('watch',function(){
    gulp.watch('views/sass/**.scss', gulp.series(['css']))
});
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefix  = require("gulp-autoprefixer");
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();



gulp.task('sass', function(){
    return gulp.src('wp-content/themes/raymond-voyage/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}))
        .on('error', function(err){
            browserSync.notify(err.message, 15000);
            this.emit('end');
        })
        .pipe(autoprefix())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('wp-content/themes/raymond-voyage'))
        .pipe(browserSync.reload({stream: true}));
 });
 
 

gulp.task('watch', function(){
    browserSync.init({
        server: {
            baseDir: './'
        }
    })
    gulp.watch('wp-content/themes/raymond-voyage/sass/**/*.scss', gulp.series('sass'));
    gulp.watch('wp-content/themes/raymond-voyage/*.html').on('change', browserSync.reload);
    gulp.watch('wp-content/themes/raymond-voyage/js/**/*.js').on('change', browserSync.reload);
 })
 
 

var gulp=require('gulp');
var path=require('path')
var less=require('gulp-less')
var sass=require('gulp-sass');
// 引入js压缩文件
var jufi=require('gulp-uglify');
var cleanCss=require('gulp-clean-css');
var rename=require('gulp-rename')

//引入热刷新模块
var livereload=require("gulp-livereload");

// sass压缩文件流程
gulp.task('sastak',()=>{
    gulp.src('./sass/*.scss')
        .pipe(sass().on('error', sass.logError)) //调用sass方法编译
        .pipe(cleanCss())
        .pipe(rename(function(path){
            path.basename+='.min';
        }))
    .pipe(gulp.dest('./dist/css/minCss'))
    .pipe(livereload()); //开启热刷新
    
})

// less压缩文件
gulp.task('lestak',()=>{
    gulp.src('./less/*.less')
    .pipe(less({
        paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(cleanCss())
    .pipe(rename(function(path){
        path.basename+='.min';
    }))
    .pipe(gulp.dest('./dist/css/mincss'))
    .pipe(livereload()); //开启热刷新
})
// js压缩文件
gulp.task('sajs',()=>{
    gulp.src('./js/*.js')
    .pipe(jufi())
    .pipe(rename(function(path){
        path.basename+='.min';
    }))
    .pipe(gulp.dest('./dist/js/min'))
    .pipe(livereload()); //开启热刷新
})
// 统一观察
gulp.task('default',()=>{
    gulp.watch('./sass/*.scss',["sastak"]);
    gulp.watch('./less/*.less',["lestak"]);
    gulp.watch('./js/*.js',["sajs"]);
})

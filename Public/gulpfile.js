//载入外挂
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload');


//编译Sass，Autoprefix及缩小化
gulp.task('styles', function(){
  //后台所有的css合并为一个css文件，并且进行压缩。需把bootstrap放在前面.
  gulp.src(['src/css/*.scss','src/css/*.css','src/plugins/artDialog/css/*.css'])
    .pipe(concat('comment.css'))
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest('dist/css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('dist/css'))
    .pipe(notify({ message: 'Styles task complete' }));
});

//js 压缩
gulp.task('scripts', function(){
  gulp.src('src/js/**/*.js')
    //.pipe(jshint('.jshintrc'))
    //.pipe(jshint.reporter('default'))
    //.pipe(concat('main.js'))
    //.pipe(gulp.dest('dist/js/admin'))
    //.pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js'))
    .pipe(notify({ message: 'Scripts task complete' }));

  //comment 模块
  gulp.src(['src/plugins/vuejs/vue.js','src/plugins/zepto/zepto.min.js'])
    .pipe(concat('comment.js'))
    .pipe(gulp.dest('dist/js/modules'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js/modules'))
    .pipe(notify({ message: 'Scripts task complete' }));
});

//组件
gulp.task('plugins', function(){
  gulp.src('src/plugins/**/*')
  //.pipe(uglify())
  .pipe(gulp.dest('dist/plugins'))
  .pipe(notify({ message: 'plugins task complete' }));
});

//图片压缩
gulp.task('images', function(){
  gulp.src('src/images/**/*')
  .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
  .pipe(gulp.dest('dist/images'))
  .pipe(notify({ message: 'Images task complete' }));
});


gulp.task('default', function(){
  gulp.start('styles', 'scripts', 'images','plugins');
});

//监听
gulp.task('watch', function() {
  // 监听所有.scss档
  gulp.watch('src/css/**/*.scss', function(event) {
    gulp.start('styles');
  });
  // 监听所有.js档
  gulp.watch('src/js/**/*.js', function(event) {
    gulp.start('scripts');
  });
  // 监听所有图片档
  gulp.watch('src/images/**/*', function(event) {
    gulp.start('images');
  });
  // 监听所有plugins
  gulp.watch('src/plugins/**/*', function(event) {
    gulp.start('plugins');
  });

  // Create LiveReload server
  livereload.listen();

  // Watch any files in dist/, reload on change
  gulp.watch(['dist/**']).on('change', livereload.changed);

});
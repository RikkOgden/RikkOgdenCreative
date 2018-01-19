var gulp = require('gulp'),
postcss = require('gulp-postcss'),
//autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nestedcss = require('postcss-nested'),
cssimport = require('postcss-import'),
mixins = require('postcss-mixins'),
//hexrgba = require('postcss-hexrgba'),
postcss = require('gulp-postcss');


gulp.task('styles', function(){
  return gulp.src('./app/assets/styles/styles.css')
  .pipe(postcss([
    require("postcss-import")(),
    require("postcss-url")(),
    require("postcss-cssnext")(),
    cssimport,
    mixins,
    cssvars,
    nestedcss
     ]))
  .on('error', function(theError){
    console.log(theError.toString());
    this.emit('end');
  })
  .pipe(gulp.dest('./app/temp/styles'));

});

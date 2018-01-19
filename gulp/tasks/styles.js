var gulp = require('gulp'),
postcss = require('gulp-postcss'),
//autoprefixer = require('autoprefixer'),
//cssvars = require('postcss-simple-vars'),
nestedcss = require('postcss-nested'),
cssimport = require('postcss-import'),
mixins = require('postcss-mixins'),
cssnext = require("postcss-cssnext");
//hexrgba = require('postcss-hexrgba'),
//postcss = require('gulp-postcss');


gulp.task('styles', function(){
  return gulp.src('./app/assets/styles/styles.css')
  .pipe(postcss([postcss, cssimport, mixins, nestedcss, cssnext]))
  .on('error', function(theError){
    console.log(theError.toString());
    this.emit('end');
  })
  .pipe(gulp.dest('./app/temp/styles'));

});

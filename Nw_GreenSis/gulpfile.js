const { dest, series, src, task, watch } = require('gulp');

const rename = require('gulp-rename');
const cssnano = require('gulp-cssnano');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const minify = require("gulp-minify");

task('minify-css', function(done) {
    src('css/*.css')
    .pipe(autoprefixer({
        "overrideBrowserslist": [
          "> 1%",
          "last 2 versions",
          "ie >= 11"
        ]
      }))
      .pipe(cssnano())
      .pipe(rename({ suffix: '.min' }))
      .pipe(dest('dist/css'));
      done();
  });

  /* task('minify-js', function () {
    src('js/index.js')
      .pipe(uglify())
      .pipe(rename({ suffix: '.min' }))
      .pipe(dest('dist/js'));

  }); */

  task('minify-js2', function () {
    return src('js/index.js', { allowEmpty: true })
    .pipe(minify({noSource: true}))
      .pipe(dest('dist/js'));
  });

task('javascript', function() {
    return src('js/**/*.js')
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(dest('dist/js'));
  });

  task('default', series('minify-css', 'javascript', 'minify-js2'));
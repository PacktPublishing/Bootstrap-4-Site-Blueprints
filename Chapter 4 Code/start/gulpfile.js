// Grab our gulp packages
var gulp  = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat-util'),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    bower = require('gulp-bower')
    
// Compile Sass, Autoprefix and minify
gulp.task('styles', function() {
  return gulp.src('./assets/scss/**/*.scss')
    .pipe(plumber(function(error) {
            gutil.log(gutil.colors.red(error.message));
            this.emit('end');
    }))
    .pipe(sass())
    .pipe(autoprefixer({
            browsers: [ 'Chrome >= 35',
                        'Firefox >= 38', 
                        'Edge >= 12',
                        'Explorer >= 9',
                        'iOS >= 8',
                        'Safari >= 8',
                        'Android 2.3',
                        'Android >= 4',
                        'Opera >= 12'
                        ],
            cascade: false
        }))
    .pipe(gulp.dest('./assets/css/'))     
    .pipe(rename({suffix: '.min'}))
    .pipe(cleanCSS())
    .pipe(gulp.dest('./assets/css/'))
});    
    
// JSHint, concat, and minify JavaScript
gulp.task('site-js', function() {
  return gulp.src([	
	  
           // Grab your custom scripts
  		  './assets/scripts/*.js'
  		  
  ])
    .pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./assets/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'))
});    

// JSHint, concat, and minify Foundation JavaScript
gulp.task('bootstrap-js', function() {
  return gulp.src([	
          
          // Pick the components you need in your project
          './vendor/bootstrap/js/dist/util.js',
          './vendor/bootstrap/js/dist/alert.js',
          './vendor/bootstrap/js/dist/button.js',
          './vendor/bootstrap/js/dist/carousel.js',
          './vendor/bootstrap/js/dist/collapse.js',
          './vendor/bootstrap/js/dist/dropdown.js',
          './vendor/bootstrap/js/dist/modal.js',
          './vendor/bootstrap/js/dist/scrollspy.js',
          './vendor/bootstrap/js/dist/tab.js',
          './vendor/bootstrap/js/dist/tooltip.js',
          './vendor/bootstrap/js/dist/popover.js'
          
          
  ])
    .pipe(concat('bootstrap.js'))
    .pipe(concat.header('+function ($) {\n'))
    .pipe(concat.footer('\n}(jQuery);'))
    .pipe(gulp.dest('./assets/js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'))
});

// Create a default task 
gulp.task('default', function() {
  gulp.start('styles', 'site-js', 'bootstrap-js');
});

// Watch files for changes
gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('./assets/scss/**/*.scss', ['styles']);

  // Watch site-js files
  gulp.watch('./assets/js/scripts/*.js', ['site-js']);
  
  // Watch foundation-js files
  gulp.watch('./vendor/bootstrap/js/*.js', ['bootstrap-js']);

});

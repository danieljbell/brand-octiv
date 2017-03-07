var gulp          = require('gulp'),
    postcss       = require('gulp-postcss'),
    sass          = require('gulp-sass'),
    sourcemaps    = require('gulp-sourcemaps'),
    atImport      = require('postcss-import'),
    autoprefixer  = require('autoprefixer'),
    mqpacker      = require('css-mqpacker'),
    cssnano       = require('cssnano'),
    imagemin      = require('gulp-imagemin'),
    concat        = require('gulp-concat'),
    uglify        = require('gulp-uglify'),
    pump          = require('pump'),
    browserSync   = require('browser-sync');

gulp.task('css', function () {
  var processors = [
    atImport,
    autoprefixer({browsers: ['last 6 versions']}),
    mqpacker,
    cssnano
  ];
  return gulp.src('./src/scss/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./dist'))
    .pipe(browserSync.stream());
});

gulp.task('js', function () {
  gulp.src([
      'bower_components/jquery/dist/jquery.min.js',
      'bower_components/bootstrap-sass/assets/javascripts/bootstrap/modal.js',
      'bower_components/bootstrap-sass/assets/javascripts/bootstrap/scrollspy.js',
      'bower_components/jquery-accessible-tabs/js/jquery.tabs.js',
      'bower_components/slick-carousel/slick/slick.js',
      'bower_components/twentytwenty/js/jquery.event.move.js',
      'bower_components/twentytwenty/js/jquery.twentytwenty.js',
      'bower_components/typed.js/js/typed.js',
      'bower_components/waypoints/lib/jquery.waypoints.js',
      'bower_components/waypoints/lib/shortcuts/inview.js',
      'src/js/app.js'
    ])
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'))
    .pipe(browserSync.stream());
});

gulp.task('images', function() {
  gulp.src('src/img/*')
      .pipe(imagemin())
      .pipe(gulp.dest('dist/img'))
});

gulp.task('watch', function() {
  gulp.watch('src/scss/**/*.scss', ['css']);
  gulp.watch('src/js/app.js', ['js']);
  gulp.watch('src/img/*.{png,jpg,gif,svg}', ['images']).on('change', browserSync.reload);
  gulp.watch(['*.php', 'page-templates/*.php',  'partials/*.php']).on('change', browserSync.reload);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost:1337"
    });
});

gulp.task('default', ['watch', 'browser-sync']);

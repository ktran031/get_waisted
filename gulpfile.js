const gulp = require('gulp'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload,
    uglify = require('gulp-uglify'),
    //eslint = require('gulp-eslint'),
    babel = require('gulp-babel'),
    sass = require('gulp-sass'),
    postcss = require('gulp-postcss'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer'),
    //concat = require('gulp-concat'),
    rename = require('gulp-rename');

const url = 'http://localhost:8888/GitHub/get_waisted/httpdocs',
      assets = 'httpdocs/assets/';

/**
 * JavaScript Tasks
 */
gulp.task('scripts', function() {
    gulp.src([assets + 'js/**/*.js', '!' + assets + 'js/**/*.min.js'])
        //.pipe(eslint())                     // Start ESLint
        //.pipe(eslint.format())              // Format ESLint results and print them to the console
        .pipe(babel({presets: ['env']}))    // Compile JavaScript to ES5
        // .pipe(concat('main.js'))            // Concatenate all JS files into one
        .pipe(uglify())                     // Minify the JS file
        .pipe(rename({suffix:'.min'}))     // Rename the JS file
        .pipe(gulp.dest(assets + 'js'))       // Output the JS file to the destination folder
        .pipe(reload({stream: true}));      // Reload Page
});

/**
 * SCSS Tasks
 */
gulp.task('scss', function() {
    return gulp.src([assets + 'scss/main.scss'])
        .pipe(sourcemaps.init())                                            // Initialize the source maps
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)) // Compile SCSS to CSS, minify the CSS and output any errors on the console
        .pipe(postcss([autoprefixer()]))                                    // Add browser prefixes to CSS
        .pipe(sourcemaps.write('.'))                                        // Generate the source map
        .pipe(gulp.dest(assets + 'css'))                                      // Output the CSS file to the destination folder
        .pipe(reload({stream: true}));                                      // Reload Page
});

/**
 * Browser Sync Task
 */
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: url
    });
});

/**
 * Watch Task
 */
gulp.task('watch', function() {
    gulp.watch([assets + 'js/**/*.js', '!' + assets + 'js/**/*.min.js'], ['scripts']);
    gulp.watch(assets + 'scss/**/*.scss', ['scss']);
});

/**
 * Default Task
 */
gulp.task('default', ['scripts', 'scss', 'browser-sync', 'watch']);

/**
 * Production Task
 */
gulp.task('production', ['scripts', 'scss']);
/**
 * Gulpfile.
 *
 * Gulp with WordPress.
 *
 * Implements:
 *      1. Live reloads browser with BrowserSync.
 *      2. CSS: Sass to CSS conversion, error catching, Autoprefixing, Sourcemaps,
 *         CSS minification, and Merge Media Queries.
 *      3. JS: Concatenates & uglifies Vendor and Custom JS files.
 *      4. Images: Minifies PNG, JPEG, GIF and SVG images.
 *      5. Watches files for changes in CSS or JS.
 *      6. Watches files for changes in PHP.
 *      7. Corrects the line endings.
 *      8. InjectCSS instead of browser page reload.
 *      9. Generates .pot file for i18n and l10n.
 *
 * @author Geekhive (info@geekhive.com)
 * @version 1.0.0
 */

// START Editing Project Variables.
// Project related.
var project = 'DHEA'; // Project Name.
var projectURL = 'dhea.dev'; // Project URL. Could be something like localhost:8888.
var productURL = './'; // Theme/Plugin URL. Leave it like it is, since our gulpfile.js lives in the root folder.

// Translation related.
var text_domain = 'dhea'; // Your textdomain here.
var destFile = 'dhea.pot'; // Name of the transalation file.
var packageName = 'DHEA'; // Package name.
var bugReport = 'info@geekhive.com'; // Where can users report bugs.
var lastTranslator = 'info@geekhive.com'; // Last translator Email ID.
var team = 'Webdev <info@geekhive.com>'; // Team's Email ID.
var translatePath = './languages' // Where to save the translation files.

// Style related.
var styleSRC = './assets/scss/style.scss'; // Path to main .scss file.
var styleDestination = './assets/css/'; // Path to place the compiled CSS file.

// JS Custom related.
var jsCustomSRC = './assets/js/src/*.js'; // Path to JS custom scripts folder.
var jsCustomDestination = './assets/js/'; // Path to place the compiled JS custom scripts file.
var jsCustomFile = 'scripts'; // Compiled JS custom file name.

// Images related.
var imagesSRC = './assets/img/raw/**/*.{png,jpg,gif,svg}'; // Source folder of images which should be optimized.
var imagesDestination = './assets/img/'; // Destination folder of optimized images. Must be different from the imagesSRC folder.

// Watch files paths.
var styleWatchFiles = './assets/scss/**/*.scss';
var jsWatchFiles = './assets/js/src/*.js';
var projectPHPWatchFiles = './**/*.php';

// Browsers you care about for autoprefixing.
// Browserlist https        ://github.com/ai/browserslist
const AUTOPREFIXER_BROWSERS = [
  'last 2 version',
  '> 1%',
  'ie >= 9',
  'ie_mob >= 10',
  'ff >= 30',
  'chrome >= 34',
  'safari >= 7',
  'opera >= 23',
  'ios >= 7',
  'android >= 4',
  'bb >= 10'
];

/**
 * Load Plugins.
 *
 * Load gulp plugins and assing them semantic names.
 */
var gulp = require('gulp'); // Gulp of-course

// CSS related plugins.
var sass = require('gulp-sass');
var minifycss = require('gulp-uglifycss');
var autoprefixer = require('gulp-autoprefixer');
var bourbon = require('bourbon').includePaths;
var neat = require('bourbon-neat').includePaths;
var fontAwesome = require('node-font-awesome');

// JS related plugins.
var browserify = require('browserify');
var streamify = require('gulp-streamify');
var source = require('vinyl-source-stream');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var jshint = require('gulp-jshint');
var jshintStyle = require('jshint-stylish');
var map = require('map-stream');


// Image realted plugins.
var imagemin = require('gulp-imagemin');

// Utility related plugins.
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var lineec = require('gulp-line-ending-corrector');
var filter = require('gulp-filter');
var sourcemaps = require('gulp-sourcemaps');
var notify = require('gulp-notify');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var wpPot = require('gulp-wp-pot');
var sort = require('gulp-sort');
var events = require('events');

/**
 * Task: `browser-sync`.
 *
 * Live Reloads, CSS injections, Localhost tunneling.
 *
 * This task does the following:
 *    1. Sets the project URL
 *    2. Sets inject CSS
 *    3. You may define a custom port
 *    4. You may want to stop the browser from openning automatically
 */
gulp.task('browser-sync', function () {
  browserSync.init({

    // For more options
    // @link http://www.browsersync.io/docs/options/

    // Project URL.
    proxy: projectURL,

    // `true` Automatically open the browser with BrowserSync live server.
    // `false` Stop the browser from automatically opening.
    open: true,

    // Inject CSS changes.
    // Commnet it to reload browser for every CSS change.
    injectChanges: true,

    // Use a specific port (instead of the one auto-detected by Browsersync).
    // port: 7000,

  });
});


/**
 * Task: `styles`.
 *
 * Compiles Sass, Autoprefixes it and Minifies CSS.
 *
 * This task does the following:
 *    1. Gets the source scss file
 *    2. Compiles Sass to CSS
 *    3. Writes Sourcemaps for it
 *    4. Autoprefixes it and generates style.css
 *    5. Renames the CSS file with suffix .min.css
 *    6. Minifies the CSS file and generates style.min.css
 *    7. Injects CSS or reloads the browser via browserSync
 */
gulp.task('styles', function () {
  gulp.src(styleSRC)
    .pipe(sourcemaps.init())
    .pipe(sass({
      includePaths: [].concat(bourbon, neat),
      errLogToConsole: false,
      outputStyle: 'compact',
      // outputStyle: 'compressed',
      // outputStyle: 'nested',
      // outputStyle: 'expanded',
      precision: 10
    }))
    .on('error', function (err) {

      notify().write(err);
      this.emit("end");
    })
    .pipe(sourcemaps.write({includeContent: false}))
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))

    .pipe(sourcemaps.write(''))
    .pipe(lineec()) // Consistent Line Endings for non UNIX systems.
    .pipe(gulp.dest(styleDestination))

    .pipe(filter('**/*.css')) // Filtering stream to only css files
    .pipe(browserSync.stream()) // Reloads style.css if that is enqueued.

    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss({
      maxLineLen: 10
    }))
    .pipe(lineec()) // Consistent Line Endings for non UNIX systems.
    .pipe(gulp.dest(styleDestination))

    .pipe(filter('**/*.css')) // Filtering stream to only css files
    .pipe(browserSync.stream())// Reloads style.min.css if that is enqueued.
    .pipe(notify({message: 'TASK: "styles" Completed! 💯', onLast: true}))
});

/**
 * Task: `fonts`.
 *
 * Places font awesome-fonts in the assets folder
 *
 * This task does the following:
 *    1. Gets the font-awesome fonts and adds them to the assets folder
 */

gulp.task('fonts', function () {
  gulp.src(fontAwesome.fonts)
    .pipe(gulp.dest('./assets/fonts'));
});


/**
 * Task: `js`.
 *
 * Concatenate and uglify custom JS scripts.
 *
 * This task does the following:
 *     1. Gets the source folder for JS custom files
 *     2. Concatenates all the files and generates custom.js
 *     3. Renames the JS file with suffix .min.js
 *     4. Uglifes/Minifies the JS file and generates custom.min.js
 */

// add other libraries to be bundle in gulp.src from node structure "'./node_modules/toastr/toastr.js'"
gulp.task('js', ['jshint'], function () {
  return gulp.src([
    './assets/js/src/*.js',
  ])
    .pipe(concat('scripts.js'))
    .on('error', function (err) {
      console.log(err.toString());
      this.emit("end");
    })
    .pipe(gulp.dest('./assets/js'))
    .pipe(uglify())
    .pipe(rename({extname: '.min.js'}))
    .pipe(gulp.dest('./assets/js'))
    .pipe(notify({message: 'TASK: "js" Completed! 💯', onLast: true}));
});

gulp.task('jshint', function () {
  return gulp.src('assets/js/src/**/*.js')
    .pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter(jshintStyle))
    .on('error', notify.onError(function (error) {
      return error.message;
    }))
});


/**
 * Task: `images`.
 *
 * Minifies PNG, JPEG, GIF and SVG images.
 *
 * This task does the following:
 *     1. Gets the source of images raw folder
 *     2. Minifies PNG, JPEG, GIF and SVG images
 *     3. Generates and saves the optimized images
 *
 * This task will run only once, if you want to run it
 * again, do it with the command `gulp images`.
 */
gulp.task('images', function () {
  gulp.src(imagesSRC)
    .pipe(imagemin({
      progressive: true,
      optimizationLevel: 3, // 0-7 low-high
      interlaced: true,
      svgoPlugins: [{removeViewBox: false}]
    }))
    .pipe(gulp.dest(imagesDestination))
    .pipe(notify({message: 'TASK: "images" Completed! 💯', onLast: true}));
});


/**
 * WP POT Translation File Generator.
 *
 * * This task does the following:
 *     1. Gets the source of all the PHP files
 *     2. Sort files in stream by path or any custom sort comparator
 *     3. Applies wpPot with the variable set at the top of this file
 *     4. Generate a .pot file of i18n that can be used for l10n to build .mo file
 */
gulp.task('translate', function () {
  return gulp.src(projectPHPWatchFiles)
    .pipe(sort())
    .pipe(wpPot({
      domain: text_domain,
      destFile: destFile,
      package: packageName,
      bugReport: bugReport,
      lastTranslator: lastTranslator,
      team: team
    }))
    .pipe(gulp.dest(translatePath))
    .pipe(notify({message: 'TASK: "translate" Completed! 💯', onLast: true}))
});


/**
 * Watch Tasks.
 *
 * Watches for file changes and runs specific tasks.
 */
gulp.task('default', ['styles', 'fonts', 'js', 'images', 'browser-sync'], function () {
  gulp.watch(projectPHPWatchFiles, reload); // Reload on PHP file changes.
  gulp.watch(styleWatchFiles, ['styles']); // Reload on SCSS file changes.
  gulp.watch(jsWatchFiles, ['js', reload]); // Reload on customJS file changes.
});

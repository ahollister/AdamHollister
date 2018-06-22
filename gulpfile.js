// Load dependencies
var gulp = require( 'gulp' );
var sass = require( 'gulp-sass' );
var sassGlob = require( 'gulp-sass-glob' );
var autoprefixer = require( 'gulp-autoprefixer' );
var gutil = require( 'gulp-util' );
var cleanCSS = require( 'gulp-clean-css' );
var sourcemaps = require( 'gulp-sourcemaps' );
var concat = require( 'gulp-concat' );
var rename = require( 'gulp-rename' );
var jshint = require( 'gulp-jshint' );
var stylish = require( 'jshint-stylish' );
var babel = require( 'gulp-babel' );
var uglify = require( 'gulp-uglify' );
var imagemin = require( 'gulp-imagemin' );
var cache = require( 'gulp-cached' );
var browserSync = require( 'browser-sync' ).create();

// Using a config object for things like file paths etc.
var config = {
	styles: {
		sourceDir: 'assets/sass',
		sourceFile: 'assets/sass/style.scss',
		targetDir: 'dist/css',
	},
	scripts: {
		sourceFile: 'assets/js/**/*.js',
		targetDir: 'dist/js',
	},
	images: {
		sourceFile: 'assets/images/*',
		targetDir: 'dist/images',
	},
	browserSync: {
		proxy: 'http://adamhollistercv.local',
		reloadDirectory: 'dist/**',
		active: true
	}
};

// Process SASS
gulp.task( 'styles', function() {
	return gulp.src( config.styles.sourceFile )
		// Allow for globbed @imports in SCSS and sourcemaps
		.pipe( sassGlob() )
		.pipe( sourcemaps.init() )
		// Print SASS errors to console
		.pipe( sass().on( 'error', sass.logError ) )
		// Write sourcemaps
		.pipe( sourcemaps.write() )
		// Autoprefix
		.pipe(
			autoprefixer(
				'last 2 version',
				'safari 5',
				'ie 8',
				'ie 9',
				'opera 12.1',
				'ios 6',
				'android 4'
			)
		)
		// Minify
		.pipe( cleanCSS( {
			compatibility: '*'
		} ) )
		// Rename file to .min.css
		.pipe( rename( {
			suffix: '.min'
		} ) )
		// Put resulting file in target directory
		.pipe( gulp.dest( config.styles.targetDir ) )
		// Browsersync
		.pipe( browserSync.stream() );
});


// Process JS
gulp.task( 'scripts', function() {
	return gulp.src( config.scripts.sourceFile )
		// Print JS errors to console
		.on( 'error', gutil.log )
		// Sourcemaps
		.pipe( sourcemaps.init() )
		// Print JS hints to console
		.pipe( jshint() )
		.pipe( jshint.reporter( stylish ) )
		// Transpile any ES2015 syntax into browser-ready JS
		.pipe( babel( {
			presets: ['es2015']
		} ) )
		// Minify
		.pipe( uglify() )
		// Concatenate, rename file, write sourcemaps
		.pipe( concat( 'scripts.js' ) )
		.pipe( rename( {
			suffix: '.min'
		} ) )
		.pipe( sourcemaps.write( '.' ) )
		// Put resulting file in destination
		.pipe( gulp.dest( config.scripts.targetDir ) )
		.pipe( browserSync.stream() );
} );


// Process Images
gulp.task( 'images', function() {
	return gulp.src( config.images.sourceFile )
		.pipe( cache( 'imgminifying' ) )
		.pipe( imagemin( {
			optimizationLevel: 3,
			progressive: true,
			interlaced: true
		} ) )
		.pipe( gulp.dest( config.images.targetDir ) );
} );


// Browsersync
gulp.task( 'browserSync', function() {
	browserSync.init( {
		proxy: config.browserSync.proxy
	} );
} );


// Default task order - terminal command: gulp
gulp.task( 'default', function() {
	tasks = ['styles', 'scripts', 'images'];

	gulp.start( tasks );
} );


// Default task order - terminal command: gulp watch
gulp.task( 'watch', function() {
	// Run default tasks first
	var tasks = ['default'];

	// Add relevant tasks to array if Browsersync active
	if ( config.browserSync.active ) {
		tasks.push( 'browserSync' );
	}

	gulp.start( tasks );

	// Watch CSS files
	gulp.watch( config.styles.sourceDir + '/**/*.scss', ['styles'] );

	// Watch JS files
	gulp.watch( config.scripts.sourceFile, ['scripts'] );

	// Watch Images
	gulp.watch( config.images.sourceFile, ['images'] );
} );

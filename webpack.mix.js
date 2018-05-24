let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/* THEME 1 */
mix.scripts([
	'resources/views/theme1/js/modernizr.js',
	'resources/views/theme1/js/pace.min.js'
], 'public/theme1/app.js');

mix.scripts([
	'resources/views/theme1/js/jquery-2.1.3.min.js',
	'resources/views/theme1/js/plugins.js',
	'resources/views/theme1/js/main.js'
], 'public/theme1/main.js');

mix.styles([
	'resources/views/theme1/css/fonts.css',
	'resources/views/theme1/css/font-awesome.css',
	'resources/views/theme1/css/micons.css',
	'resources/views/theme1/css/base.css',
	'resources/views/theme1/css/main.css',
	'resources/views/theme1/css/vendor.css',
], 'public/theme1/app.css');


/* THEME 2 */
mix.scripts([
	'resources/views/theme2/js/jquery-min.js',
	'resources/views/theme2/js/popper.min.js',
	'resources/views/theme2/js/bootstrap.min.js',
	'resources/views/theme2/js/jquery.mixitup.js',
	'resources/views/theme2/js/nivo-lightbox.js',
	'resources/views/theme2/js/owl.carousel.js',
	'resources/views/theme2/js/jquery.stellar.min.js',
	'resources/views/theme2/js/jquery.nav.js',
	'resources/views/theme2/js/scrolling-nav.js',
	'resources/views/theme2/js/jquery.easing.min.js',
	'resources/views/theme2/js/smoothscroll.js',
	'resources/views/theme2/js/jquery.slicknav.js',
	'resources/views/theme2/js/smoothscroll.js',
	'resources/views/theme2/js/wow.js',
	'resources/views/theme2/js/jquery.vide.js',
	'resources/views/theme2/js/jquery.counterup.min.js',
	'resources/views/theme2/js/jquery.magnific-popup.min.js',
	'resources/views/theme2/js/waypoints.min.js',
	'resources/views/theme2/js/form-validator.min.js',
	'resources/views/theme2/js/contact-form-script.js',
	'resources/views/theme2/js/main.js'
], 'public/theme2/app.js');

mix.styles([
	'resources/views/theme2/css/bootstrap.min.css',
	'resources/views/theme2/css/font-awesome.min.css',
	'resources/views/theme2/css/line-icons.css',
	'resources/views/theme2/css/owl.carousel.css',
	'resources/views/theme2/css/owl.theme.css',
	'resources/views/theme2/css/nivo-lightbox.css',
	'resources/views/theme2/css/magnific-popup.css',
	'resources/views/theme2/css/slicknav.css',
	'resources/views/theme2/css/animate.css',
	'resources/views/theme2/css/main.css',
	'resources/views/theme2/css/responsive.css'
], 'public/theme2/app.css');

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

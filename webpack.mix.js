const mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
	.copy('node_modules/@fortawesome/fontawesome-free', 'public/css/font-awesome')
	.styles('public/css/font-awesome/css/all.css', 'public/css/font-awesome/css/all.css')
	.options({
		processCssUrls: false,
		postCss:[tailwindcss('./tailwind.config.js')],
	});

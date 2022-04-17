const mix = require('laravel-mix');

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
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/custom.scss', 'public/css');
mix.js('resources/js/bootstrap.js', 'public/js');
mix.js('resources/js/theme.js', 'public/js');
mix.js('resources/js/vanilla-zoom.js', 'public/js');
mix.js('resources/js/bootstrap.min.js', 'public/js');
mix.sass('resources/sass/vanilla-zoom.min.scss', 'public/css');




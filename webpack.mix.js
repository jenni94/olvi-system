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
 mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles([
       'public/css/app.css',
       'node_modules/admin-lte/plugins/font-awesome/css/font-awesome.min.css',
       'node_modules/admin-lte/dist/css/adminlte.css'
   ], 'public/css/app.css');

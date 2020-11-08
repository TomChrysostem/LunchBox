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
   .sass('resources/sass/app.scss', 'public/css');
mix.combine([
    'resources/css/bootstrap.min.css', 
    'resources/css/image-upload.css',
    'resources/css/light-bootstrap-dashboard.css'
], 'public/css/app.css');
mix.combine([
    'resources/js/core/jquery.3.2.1.min.js',
    'resources/js/core/popper.min.js',
    'resources/js/core/bootstrap.min.js',
    'resources/js/plugins/bootstrap-switch.js',
    'resources/js/plugins/bootstrap-notify.js',
    'resources/js/plugins/chartist.min.js',
    'resources/js/plugins/nouislider.min.js',
    'resources/js/light-bootstrap-dashboard.js',
    'resources/js/image-upload.js',
], 'public/js/app.js');

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

mix.sass('resources/assets/sass/style.scss', 'public/assets')
    .sass('resources/assets/sass/admin.scss', 'public/assets')

    .styles([
        // WEB .css files

        'public/assets/style.css' // this .css file must be last
    ], 'public/css/style.min.css')

    .styles([
        // ADMIN - LOGIN .css files
        'resources/assets/templates/admin/css/bootstrap.min.css',
        'resources/assets/templates/admin/css/metismenu.min.css',
        'resources/assets/templates/admin/css/icons.css',
        'resources/assets/templates/admin/css/style.css',
        'public/assets/admin.css' // this .css file must be last
    ], 'public/css/login.min.css')

    .styles([
        // ADMIN .css files

        'public/assets/admin.css' // this .css file must be last
    ], 'public/css/admin.min.css')

    .scripts([
        // WEB .js files

        'resources/assets/js/frontend.js' // this .js file must be last
    ], 'public/js/script.min.js')

    .scripts([
        // ADMIN - LOGIN .js files
        'resources/assets/templates/admin/js/jquery.min.js',
        'resources/assets/templates/admin/js/bootstrap.bundle.min.js',
        'resources/assets/templates/admin/js/metisMenu.min.js',
        'resources/assets/templates/admin/js/jquery.slimscroll.js',
        'resources/assets/templates/admin/js/waves.min.js',
        'resources/assets/templates/admin/js/jquery.sparkline.min.js',
        'resources/assets/templates/admin/js/app.js',
    ], 'public/js/login.min.js')

    .scripts([
        // ADMIN .js files

        'resources/assets/js/admin.js' // this .js file must be last
    ], 'public/js/admin.min.js');

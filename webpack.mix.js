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
    .sass('resources/assets/sass/auth.scss', 'public/assets')
    .sass('resources/assets/sass/admin.scss', 'public/assets')

    .styles([ // WEB .css files
        'resources/assets/templates/bootstrap_5/css/bootstrap.min.css',
        'resources/assets/templates/bootstrap_5/css/bootstrap.rtl.min.css',
        'resources/assets/templates/bootstrap_5/css/bootstrap-grid.min.css',
        'resources/assets/templates/bootstrap_5/css/bootstrap-grid.rtl.min.css',
        'resources/assets/templates/bootstrap_5/css/bootstrap-reboot.min.css',
        'resources/assets/templates/bootstrap_5/css/bootstrap-reboot.rtl.min.css',
        'resources/assets/templates/bootstrap_5/css/bootstrap-utilities.min.css',
        'resources/assets/templates/bootstrap_5/css/bootstrap-utilities.rtl.min.css',
        'resources/assets/icons/fontawesome/css/all.css',
        'resources/assets/icons/fontawesome/css/brands.css',
        'public/assets/style.css' // this .css file must be last
    ], 'public/css/style.min.css')

    .styles([ // AUTH .css files
        'resources/assets/templates/admin/css/bootstrap.min.css',
        'resources/assets/templates/admin/css/icons.min.css',
        'resources/assets/templates/admin/css/app.min.css',
        'resources/assets/templates/admin/css/custom.min.css',
        'public/assets/auth.css' // this .css file must be last
    ], 'public/css/auth.min.css')

    .styles([ // ADMIN .css files
        'resources/assets/templates/admin/css/jsvectormap.min.css', // Overview dashboard
        'resources/assets/templates/admin/css/swiper-bundle.min.css', // Overview dashboard
        'resources/assets/templates/admin/css/glightbox.min.css', // Gallery CSS
        'resources/assets/templates/admin/css/nouislider.min.css',
        'resources/assets/templates/admin/css/classic.min.css',
        'resources/assets/templates/admin/css/dataTables.bootstrap5.min.css',
        'resources/assets/templates/admin/css/responsive.bootstrap.min.css',
        'resources/assets/templates/admin/css/select2.min.css',
        'resources/assets/templates/admin/css/sweetalert2.min.css',
        'resources/assets/templates/admin/css/bootstrap.min.css',
        'resources/assets/templates/admin/css/icons.min.css',
        'resources/assets/templates/admin/css/app.min.css',
        'resources/assets/templates/admin/css/custom.min.css',
        'public/assets/admin.css' // this .css file must be last
    ], 'public/css/admin.min.css')


    .scripts([ // WEB .js files
        'resources/assets/templates/frontend_default/js/jquery-3.6.3.min.js',
        //'resources/assets/templates/bootstrap_5/js/bootstrap.min.js',
        //'resources/assets/templates/bootstrap_5/js/bootstrap.esm.min.js',
        'resources/assets/templates/bootstrap_5/js/bootstrap.bundle.min.js',
        'resources/assets/js/frontend.js' // this .js file must be last
    ], 'public/js/script.min.js')

    .scripts([ // AUTH .js files
        'resources/assets/templates/admin/js/jquery-3.6.2.min.js',
        'resources/assets/templates/admin/js/bootstrap.bundle.min.js',
        'resources/assets/templates/admin/js/simplebar.min.js',
        'resources/assets/templates/admin/js/waves.min.js',
        'resources/assets/templates/admin/js/feather.min.js',
        'resources/assets/templates/admin/js/lord-icon-2.1.0.js',
        'resources/assets/templates/admin/js/particles.js',
        'resources/assets/templates/admin/js/particles.app.js',
        'resources/assets/templates/admin/js/password-addon.init.js',
        'resources/assets/js/auth.js' // this .css file must be last
    ], 'public/js/auth.min.js')

    .scripts([ // ADMIN .js files
        'resources/assets/templates/admin/js/jquery-3.6.2.min.js',
        'resources/assets/templates/admin/js/bootstrap.bundle.min.js',
        'resources/assets/templates/admin/js/simplebar.min.js',
        'resources/assets/templates/admin/js/waves.min.js',
        'resources/assets/templates/admin/js/feather.min.js',
        'resources/assets/templates/admin/js/lord-icon-2.1.0.js',
        'resources/assets/templates/admin/js/flatpickr.min.js',
        'resources/assets/templates/admin/js/flatpickr_lang/sk.js',
        'resources/assets/templates/admin/js/pickr.min.js',
        'resources/assets/templates/admin/js/bootstrap-filestyle.min.js',
        'resources/assets/templates/admin/js/select2.min.js',
        'resources/assets/templates/admin/js/jquery.dataTables.min.js',
        'resources/assets/templates/admin/js/dataTables.bootstrap5.min.js',
        'resources/assets/templates/admin/js/dataTables.responsive.min.js',
        'resources/assets/templates/admin/js/sweetalert2.min.js',
        'resources/assets/templates/admin/js/tinymce.min.js',
        'resources/assets/templates/admin/js/Sortable.min.js',
        'resources/assets/templates/admin/js/datatables.init.js',
        'resources/assets/templates/admin/js/form-pickers.init.js',
        'resources/assets/templates/admin/js/select2.init.js',
        'resources/assets/templates/admin/js/apexcharts.min.js', // Overview dashboard
        'resources/assets/templates/admin/js/jsvectormap.min.js', // Overview dashboard
        'resources/assets/templates/admin/js/world-merc.js', // Overview dashboard
        'resources/assets/templates/admin/js/swiper-bundle.min.js', // Overview dashboard
        'resources/assets/templates/admin/js/nouislider.min.js',
        'resources/assets/templates/admin/js/wNumb.min.js',
        'resources/assets/templates/admin/js/glightbox.min.js', // Gallery JS
        'resources/assets/templates/admin/js/app.js',
        'resources/assets/js/admin.js' // this .js file must be last
    ], 'public/js/admin.min.js');

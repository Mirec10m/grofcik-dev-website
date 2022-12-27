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
    .sass('resources/assets/sass/new_admin.scss', 'public/new_css')

    .styles([ // AUTH .css files
        'resources/assets/templates/template/css/bootstrap.min.css',
        'resources/assets/templates/template/css/icons.min.css',
        'resources/assets/templates/template/css/app.min.css',
        'resources/assets/templates/template/css/custom.min.css',
        //'',
    ], 'public/new_css/auth.min.css')
    .scripts([ // AUTH .js files
        'resources/assets/templates/template/js/bootstrap.bundle.min.js',
        'resources/assets/templates/template/js/simplebar.min.js',
        'resources/assets/templates/template/js/waves.min.js',
        'resources/assets/templates/template/js/feather.min.js',
        'resources/assets/templates/template/js/lord-icon-2.1.0.js',
        'resources/assets/templates/template/js/plugins.js',
        'resources/assets/templates/template/js/particles.js',
        'resources/assets/templates/template/js/particles.app.js',
        'resources/assets/templates/template/js/password-addon.init.js',
        //'',
    ], 'public/new_js/auth.min.js')

    .styles([ // ADMIN .css files
        'resources/assets/templates/template/css/dataTables.bootstrap5.min.css',
        'resources/assets/templates/template/css/responsive.bootstrap.min.css',
        'resources/assets/templates/template/css/select2.min.css',
        'resources/assets/templates/template/css/sweetalert2.min.css',
        'resources/assets/templates/template/css/bootstrap.min.css',
        'resources/assets/templates/template/css/icons.min.css',
        'resources/assets/templates/template/css/app.min.css',
        'resources/assets/templates/template/css/custom.min.css',
        'public/new_css/new_admin.css' // this .css file must be last
    ], 'public/new_css/admin.min.css')
    .scripts([ // ADMIN .js files
        'resources/assets/templates/template/js/jquery-3.6.2.min.js',
        'resources/assets/templates/template/js/bootstrap.bundle.min.js',
        'resources/assets/templates/template/js/simplebar.min.js',
        'resources/assets/templates/template/js/waves.min.js',
        'resources/assets/templates/template/js/feather.min.js',
        'resources/assets/templates/template/js/lord-icon-2.1.0.js',
        'resources/assets/templates/template/js/flatpickr.min.js',
        'resources/assets/templates/template/js/bootstrap-filestyle.min.js',
        'resources/assets/templates/template/js/select2.min.js',
        'resources/assets/templates/template/js/jquery.dataTables.min.js',
        'resources/assets/templates/template/js/dataTables.bootstrap5.min.js',
        'resources/assets/templates/template/js/dataTables.responsive.min.js',
        'resources/assets/templates/template/js/sweetalert2.min.js',
        'resources/assets/templates/template/js/tinymce.min.js',
        'resources/assets/templates/template/js/datatables.init.js',
        'resources/assets/templates/template/js/form-pickers.init.js',
        'resources/assets/templates/template/js/select2.init.js',
        'resources/assets/templates/template/js/app.js',
        'resources/assets/js/admin.js' // this .js file must be last
    ], 'public/new_js/admin.min.js')














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
        'resources/assets/templates/admin/css/morris.css',
        'resources/assets/templates/admin/css/bootstrap-colorpicker.min.css',
        'resources/assets/templates/admin/css/bootstrap-datepicker.min.css',
        'resources/assets/templates/admin/css/select2.min.css',
        'resources/assets/templates/admin/css/jquery.bootstrap-touchspin.min.css',
        'resources/assets/templates/admin/css/dataTables.bootstrap4.min.css',
        'resources/assets/templates/admin/css/buttons.bootstrap4.min.css',
        'resources/assets/templates/admin/css/responsive.bootstrap4.min.css',
        'resources/assets/templates/admin/css/magnific-popup.css',
        'resources/assets/templates/admin/css/bootstrap.min.css',
        'resources/assets/templates/admin/css/metismenu.min.css',
        'resources/assets/templates/admin/css/icons.css',
        'resources/assets/templates/admin/css/style.css',
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
        'resources/assets/templates/admin/js/jquery.min.js',
        'resources/assets/templates/admin/js/bootstrap.bundle.min.js',
        'resources/assets/templates/admin/js/metisMenu.min.js',
        'resources/assets/templates/admin/js/jquery.slimscroll.js',
        'resources/assets/templates/admin/js/waves.min.js',
        'resources/assets/templates/admin/js/jquery.sparkline.min.js',
        'resources/assets/templates/admin/js/morris.min.js',
        'resources/assets/templates/admin/js/raphael-min.js',
        'resources/assets/templates/admin/js/tinymce.min.js',
        'resources/assets/templates/admin/js/bootstrap-colorpicker.min.js',
        'resources/assets/templates/admin/js/bootstrap-datepicker.js',
        'resources/assets/templates/admin/js/select2.min.js',
        'resources/assets/templates/admin/js/bootstrap-maxlength.min.js',
        'resources/assets/templates/admin/js/bootstrap-filestyle.min.js',
        'resources/assets/templates/admin/js/jquery.bootstrap-touchspin.min.js',
        'resources/assets/templates/admin/js/form-advanced.js', // form advanced init
        'resources/assets/templates/admin/js/jquery.dataTables.min.js',
        'resources/assets/templates/admin/js/dataTables.bootstrap4.min.js',
        'resources/assets/templates/admin/js/dataTables.buttons.min.js',
        'resources/assets/templates/admin/js/buttons.bootstrap4.min.js',
        'resources/assets/templates/admin/js/jszip.min.js',
        'resources/assets/templates/admin/js/pdfmake.min.js',
        'resources/assets/templates/admin/js/vfs_fonts.js',
        'resources/assets/templates/admin/js/buttons.html5.min.js',
        'resources/assets/templates/admin/js/buttons.print.min.js',
        'resources/assets/templates/admin/js/buttons.colVis.min.js',
        'resources/assets/templates/admin/js/dataTables.responsive.min.js',
        'resources/assets/templates/admin/js/responsive.bootstrap4.min.js',
        'resources/assets/templates/admin/js/datatables.init.js', // datatables init
        'resources/assets/templates/admin/js/jquery.magnific-popup.min.js',
        'resources/assets/templates/admin/js/lightbox.js',
        'resources/assets/templates/admin/js/app.js',
        'resources/assets/js/admin.js' // this .js file must be last
    ], 'public/js/admin.min.js');

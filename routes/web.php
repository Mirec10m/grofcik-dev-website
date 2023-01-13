<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ExamplesController;
use App\Http\Controllers\Admin\ImagesController;
use App\Http\Controllers\Admin\TinyMceController;
use App\Http\Controllers\Admin\SuperAdminController;

foreach(config('settings.languages') as $lang => $name){
    $prefix = $lang === config('app.locale') ? '' : $lang;

    // Pages
    Route::get("$prefix/", [ PagesController::class, 'index'])->name("web.home.$lang");

    if($lang == 'sk'){
        // Here goes routes with URL in slovakian language

        // Email
        //Route::get("$prefix/kontakt", [ PagesController::class, 'contact'])->name("web.contact.$lang");
        //Route::post("$prefix/kontakt", [ PagesController::class, 'send'])->name("web.contact.send.$lang");

    }

}

Route::get("/mapa-stranky", [ SitemapController::class, 'render'])->name("sitemap.render");

// ADMIN Routes
Route::middleware(['auth', 'admin'])->namespace('Admin')->prefix('admin')->group(function(){

    // Dashboard
    Route::get("/", [ DashboardController::class, 'index'])->name("dashboard.index");
    Route::get("/overview", [ DashboardController::class, 'overview'])->name("dashboard.overview");

    // Settings
    Route::get("/settings/edit", [ SettingsController::class, 'edit'])->name("settings.edit");
    Route::post("/settings/update", [ SettingsController::class, 'update'])->name("settings.update");
    Route::get("/settings/password", [ SettingsController::class, 'password'])->name("settings.password");
    Route::post("/settings/change", [ SettingsController::class, 'change'])->name("settings.change");

    /*
     * Examples of forms, lightbox, etc.
     *
     * Once you are done with developing the website/eshop please do the following:
     * - remove links in _menu from admin
     * - comment or remove these routes
     */
    Route::get("/examples/index", [ ExamplesController::class, 'index'])->name("examples.index");
    Route::get("/examples/create", [ ExamplesController::class, 'create'])->name("examples.create");
    Route::post("/examples/create", [ ExamplesController::class, 'store'])->name("examples.store");
    Route::get("/examples/edit", [ ExamplesController::class, 'edit'])->name("examples.edit");
    Route::post("/examples/edit", [ ExamplesController::class, 'update'])->name("examples.update");
    Route::post("/examples/delete", [ ExamplesController::class, 'delete'])->name("examples.delete");
    Route::get("/examples/gallery", [ ExamplesController::class, 'gallery'])->name("examples.gallery");
    Route::post("/examples/gallery", [ ExamplesController::class, 'upload'])->name("examples.upload");

    // Images
    Route::post("/images/delete/{image}", [ ImagesController::class, 'delete'])->name("images.delete");

    // Ajax
    Route::post("/images/upload", [ TinyMceController::class, 'upload'])->name("tinymce.upload");
    Route::post("/settings/menu", [ SettingsController::class, 'menu'])->name("settings.menu");

    // Super Admin
    Route::middleware(['super_admin'])->group(function(){
        // Database actions
        Route::get("/superadmin/migrate", [ SuperAdminController::class, 'migrate'])->name("superadmin.migrate");
        Route::get("/superadmin/seed", [ SuperAdminController::class, 'seed'])->name("superadmin.seed");

    });
});

Auth::routes([
    'register' => true,
    'reset' => true,
    'confirm' => false,
    'verify' => false,
]);

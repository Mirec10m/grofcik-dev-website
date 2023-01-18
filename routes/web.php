<?php

use App\Http\Controllers\Superadmin\DatabaseController;
use App\Http\Controllers\Superadmin\ExamplesController;
use App\Http\Controllers\Superadmin\ExamplePagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImagesController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TinyMceController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Superadmin\OrdersController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AdminsController;

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

    // Settings
    Route::get("/settings", [ SettingsController::class, 'index'])->name("settings.index");
    Route::post("/settings/profile", [ SettingsController::class, 'profile'])->name("settings.profile");
    Route::post("/settings/password", [ SettingsController::class, 'password'])->name("settings.password");
    Route::post("/settings/image", [ SettingsController::class, 'image'])->name("settings.image");

    // Users
    Route::resource("/users", UsersController::class)->except([ 'show' ]);
    Route::resource("/admins", AdminsController::class)->except([ 'show' ]);

    /*
     * Examples of forms, lightbox, etc.
     *
     * Once you are done with developing the website/eshop please do the following:
     * - remove links in _menu from admin
     * - comment or remove these routes
     */
    // Route::resource("/examples", ExamplesController::class)->except([ 'show' ]);
    // Route::get("/examples/{example}/gallery", [ ExamplesController::class, 'gallery'])->name("examples.gallery");
    // Route::post("/examples/{example}/gallery", [ ExamplesController::class, 'upload'])->name("examples.upload");

    // Images
    Route::post("/images/delete/{image}", [ ImagesController::class, 'delete'])->name("images.delete");

    // Ajax
    Route::post("/images/upload", [ TinyMceController::class, 'upload'])->name("tinymce.upload");
    Route::post("/settings/menu", [ SettingsController::class, 'menu'])->name("settings.menu");

    // Super Admin
    Route::middleware(['super_admin'])->prefix('superadmin')->group(function(){
        // Database actions
        Route::post("/migrate", [ DatabaseController::class, 'migrate'])->name("superadmin.migrate");
        Route::post("/seed", [ DatabaseController::class, 'seed'])->name("superadmin.seed");

        Route::get("/examples", [ ExamplesController::class, 'index'])->name("superadmin.examples.index");
        Route::get("/examples/create", [ ExamplesController::class, 'create'])->name("superadmin.examples.create");
        Route::post("/examples", [ ExamplesController::class, 'store'])->name("superadmin.examples.store");
        Route::get("/examples/id/edit", [ ExamplesController::class, 'edit'])->name("superadmin.examples.edit");
        Route::put("/examples/id", [ ExamplesController::class, 'update'])->name("superadmin.examples.update");
        Route::delete("/examples/id", [ ExamplesController::class, 'destroy'])->name("superadmin.examples.destroy");
        Route::get("/examples/id/gallery", [ ExamplesController::class, 'gallery'])->name("superadmin.examples.gallery");
        Route::post("/examples/id/gallery", [ ExamplesController::class, 'upload'])->name("superadmin.examples.upload");

        Route::get('/orders', [ OrdersController::class, 'index' ])->name("superadmin.orders.index");
        Route::get('/orders/id/show', [ OrdersController::class, 'show' ])->name("superadmin.orders.show");
        Route::get('/orders/id/invoice', [ OrdersController::class, 'invoice' ])->name("superadmin.orders.invoice");
        Route::delete('/orders/id', [ OrdersController::class, 'destroy' ])->name("superadmin.orders.destroy");
        Route::post('/orders/id/status', [ OrdersController::class, 'status' ])->name("superadmin.orders.status");

        Route::get("/pages/table", [ ExamplePagesController::class, 'table'])->name("superadmin.pages.table");
        Route::get("/pages/form", [ ExamplePagesController::class, 'form'])->name("superadmin.pages.form");
        Route::get("/pages/invoice", [ ExamplePagesController::class, 'invoice'])->name("superadmin.pages.invoice");
        Route::get("/pages/components", [ ExamplePagesController::class, 'components'])->name("superadmin.pages.components");
        Route::get("/pages/icons", [ ExamplePagesController::class, 'icons'])->name("superadmin.pages.icons");
        Route::get("/pages/overview", [ ExamplePagesController::class, 'overview'])->name("superadmin.pages.overview");

    });
});

Auth::routes([
    'register' => false,
    'reset' => true,
    'confirm' => false,
    'verify' => false,
]);

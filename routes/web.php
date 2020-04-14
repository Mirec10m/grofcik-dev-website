<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


foreach(config('settings.languages') as $lang => $name){
    $prefix = $lang === config('app.locale') ? '' : $lang;

    // Pages
    Route::get("$prefix/", ['as' => "web.home.$lang", 'uses' => 'PagesController@index']);

    if($lang == 'sk'){
        // Here goes routes with URL in slovakian language
    }

}

Route::get('/mapa-stranky', ['as' => 'sitemap.render', 'uses' => 'SitemapController@render']);

// ADMIN Routes
Route::middleware(['auth', 'admin'])->namespace('Admin')->prefix('admin')->group(function(){

    // Dashboard
    Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashboardController@index']);
    Route::get('/overview', ['as' => 'dashboard.overview', 'uses' => 'DashboardController@overview']);

    // Settings
    Route::get('/settings/edit', ['as' => 'settings.edit', 'uses' => 'SettingsController@edit']);
    Route::post('settings/update', ['as' => 'settings.update', 'uses' => 'SettingsController@update']);
    Route::get('/settings/password', ['as' => 'settings.password', 'uses' => 'SettingsController@password']);
    Route::post('settings/change', ['as' => 'settings.change', 'uses' => 'SettingsController@change']);

    /*
     * Examples of forms, lightbox, etc.
     *
     * Once you are done with developing the website/eshop please do the following:
     * - remove links in _menu from admin
     * - comment or remove these routes
     */
    Route::get('/examples/index', ['as' => 'examples.index', 'uses' => 'ExamplesController@index']);
    Route::get('/examples/create', ['as' => 'examples.create', 'uses' => 'ExamplesController@create']);
    Route::get('/examples/edit', ['as' => 'examples.edit', 'uses' => 'ExamplesController@edit']);
    Route::get('/examples/gallery', ['as' => 'examples.gallery', 'uses' => 'ExamplesController@gallery']);
    Route::post('/examples/delete', ['as' => 'examples.delete', 'uses' => 'ExamplesController@delete']);

    // Images
    Route::post('/images/delete/{id}', ['as' => 'images.delete', 'uses' => "ImagesController@delete"]);
});

Auth::routes([
    'register' => false,
    'reset' => true,
    'confirm' => false,
    'verify' => false
]);

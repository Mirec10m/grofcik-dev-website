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

    // Images
    Route::post('/images/delete/{id}', ['as' => 'images.delete', 'uses' => "ImagesController@delete"]);
});

Auth::routes([
    'register' => true,
    'reset' => true,
    'confirm' => false,
    'verify' => true
]);

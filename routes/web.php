<?php

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

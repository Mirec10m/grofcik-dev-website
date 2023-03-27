<?php

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Demibox\CookiesController;
use App\Http\Controllers\Demibox\PostCategoriesController;
use App\Http\Controllers\Demibox\PostsController;
use App\Http\Controllers\Demibox\PostTagsController;
use Illuminate\Support\Facades\Route;

Route::middleware('demibox:cookies.show')->group(function(){
    Route::post("/cookies", [CookiesController::class, 'submit'])->name("cookies.submit");
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function(){

    Route::middleware('demibox:users.show')->group(function(){
        Route::resource("/users", UsersController::class)->except([ 'show' ]);

        Route::middleware('demibox:users.admins')->group(function(){
            Route::resource("/admins", AdminsController::class)->except([ 'show' ]);
        });
    });

    Route::middleware('demibox:blog.show')->group(function(){
        Route::resource("/posts", PostsController::class);

        Route::middleware('demibox:blog.categories')->group(function(){
            Route::resource("/post-categories", PostCategoriesController::class)->except([ 'show' ]);
        });
        Route::middleware('demibox:blog.tags')->group(function(){
            Route::resource("/post-tags", PostTagsController::class)->except([ 'show' ]);
        });
    });

});

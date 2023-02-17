<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demibox\CookiesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Demibox\PostsController;
use App\Http\Controllers\Demibox\PostCategoriesController;
use App\Http\Controllers\Demibox\PostTagsController;


// Cookies Routes
if ( config('demibox.cookies.show') ) {
    Route::post("/cookies", [CookiesController::class, 'submit'])->name("cookies.submit");
}

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function(){
    if ( config('demibox.users.show') ) {
        Route::resource("/users", UsersController::class)->except([ 'show' ]);

        if ( config('demibox.users.admins') ) {
            Route::resource("/admins", AdminsController::class)->except([ 'show' ]);
        }
    }

    if ( config('demibox.blog.show') ) {
        Route::resource("/posts", PostsController::class)->except([ 'show' ]);

        if ( config('demibox.blog.categories') ) {
            Route::resource("/post-categories", PostCategoriesController::class)->except([ 'show' ]);
        }
        if ( config('demibox.blog.tags') ) {
            Route::resource("/post-tags", PostTagsController::class)->except([ 'show' ]);
        }
    }
});

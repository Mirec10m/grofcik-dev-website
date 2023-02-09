<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demibox\CookiesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AdminsController;


// Cookies Routes
if ( config('demibox.cookies.show') ) {
    Route::post("/cookies", [CookiesController::class, 'submit'])->name("cookies.submit");
}

Route::middleware(['auth', 'admin'])->namespace('Admin')->prefix('admin')->group(function(){
    if ( config('demibox.users.show') ) {
        Route::resource("/users", UsersController::class)->except([ 'show' ]);

        if ( config('demibox.users.admins') ) {
            Route::resource("/admins", AdminsController::class)->except([ 'show' ]);
        }
    }
});

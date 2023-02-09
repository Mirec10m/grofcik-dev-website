<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demibox\CookiesController;

// Cookies Routes
if ( config('demibox.cookies.show') ) {
    Route::post("/cookies", [CookiesController::class, 'submit'])->name("cookies.submit");
}

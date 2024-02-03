<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->as('user.')->group(function() {
    Route::get('/', Controllers\User\IndexController::class)->name('index');
});

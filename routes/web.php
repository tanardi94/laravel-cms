<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Controllers\Login\IndexController::class)->name('auth.login.index');
Route::get('/register', Controllers\Login\IndexRegisterController::class)->name('auth.register.index');
Route::post('/login', Controllers\Login\LoginController::class)->name('auth.login.post');
Route::post('/register', Controllers\Login\RegisterController::class)->name('auth.register.post');
Route::post('/logout', Controllers\Login\LogoutController::class)->name('auth.logout');

Route::prefix('pages')->as('pages.')->group(function () {
    include 'modules/dashboard.php';
});

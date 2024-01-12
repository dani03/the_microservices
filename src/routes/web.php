<?php

use App\Http\Controllers\LocalController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/page2', [LocalController::class, 'index'])->name('page2');


Route::get('/oauth/{provider}/redirect', [SocialiteController::class, 'redirect'])->name('redirect.socialite');

Route::get('oauth/{provider}/callback', [SocialiteController::class, 'callback'])->name('callback.social');

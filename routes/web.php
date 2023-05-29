<?php

use Illuminate\Support\Facades\Route;

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
});
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        // Your profile route logic
    })->name('profile');

    Route::get('/settings', function () {
        // Your settings route logic
    })->name('settings');
});
Route::resource('products', 'ProductController');
Route::post('/contact', ['ContactController']);
Route::resource('posts', 'PostController');


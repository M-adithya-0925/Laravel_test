<?php


use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\GoogleAuthController;

// Login page
Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

// Google auth
Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])
    ->name('google.login');

Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback']);

Route::get('/logout', [GoogleAuthController::class, 'logout'])
    ->name('logout');

// Protected CRUD
Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserDetailController::class);
});




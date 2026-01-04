<?php


use App\Http\Controllers\UserDetailController;

Route::get('/', [UserDetailController::class, 'index']);
Route::resource('users', UserDetailController::class);


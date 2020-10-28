<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// Login page view:
Route::get('/login', [userController::class, 'login'])->middleware('guest')->name('login');
// Login post data handle:
Route::post('/login', [userController::class, 'login_verify'])->middleware('guest')->name('login.verify');
// Register page view:
Route::get('/register', [userController::class, 'register'])->middleware('guest')->name('register');
// Register post data handle:
Route::post('/register', [userController::class, 'register_verify'])->middleware('guest')->name('register.verify');
// Logout
Route::get('/logout', [userController::class, 'logout'])->middleware('auth')->name('logout');
// Detail
Route::get('/', [userController::class, 'detail'])->middleware('auth')->name('detail');
// Edit
Route::get('/edit', [userController::class, 'edit'])->middleware('auth')->name('edit');
// Edit post data hand;e
Route::patch('/edit', [userController::class, 'update'])->middleware('auth')->name('update');

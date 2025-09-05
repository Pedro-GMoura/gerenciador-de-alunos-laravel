<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/create-user',[UserController::class, 'create'])->name('user.create');
Route::get('/index-user',[UserController::class, 'index'])->name('user.index');
Route::post('/store-user',[UserController::class, 'store'])->name('user.store');
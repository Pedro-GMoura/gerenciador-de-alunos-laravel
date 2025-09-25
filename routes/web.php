<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/create-user',[UserController::class, 'create'])->name('user.create');
Route::get('/index-user',[UserController::class, 'index'])->name('user.index');
Route::get('/show-user/{user}',[UserController::class, 'show'])->name('user.show');
Route::post('/store-user',[UserController::class, 'store'])->name('user.store');
Route::get('/edit-user/{user}',[UserController::class, 'edit'])->name('user.edit');
Route::get('/edit-userpassword/{user}',[UserController::class, 'editpassword'])->name('user.editpassword');
Route::put('/update-user/{user}',[UserController::class, 'update'])->name('user.update');
Route::put('/update-updatePassword/{user}',[UserController::class, 'updatePassword'])->name('user.updatePassword');
Route::delete('/destroy-user/{user}',[UserController::class, 'destroy'])->name('user.destroy');
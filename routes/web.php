<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::any('pages/{slug}', [IndexController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
//Route::get('/', [IndexController::class, 'index']);
Route::resource('/admin/menu', MenuController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

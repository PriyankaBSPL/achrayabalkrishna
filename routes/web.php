<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PublicationController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/admin/menu', MenuController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'admin'], function () {

Route::resource('/language', LanguageController::class);
Route::resource('/publication', PublicationController::class);
});

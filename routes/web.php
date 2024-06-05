<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\MenuController;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\HomeController;

use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PublicationController;



Auth::routes();

Route::any('pages/{slug}', [IndexController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/celebration', [HomeController::class, 'celebration']);
//Route::get('/', [IndexController::class, 'index']);
Route::resource('/admin/menu', MenuController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/publication/{slug}/{id}', [HomeController::class, 'publication']);
// Route::get('/{id}', [HomeController::class, 'show'])->name('publication.show');
Route::get('/book/{id}',  [HomeController::class, 'show'])->name('book.show');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/menu', MenuController::class);
    Route::resource('/language', LanguageController::class);
    Route::resource('/publication', PublicationController::class);
});


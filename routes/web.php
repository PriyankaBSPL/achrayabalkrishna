<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PublicationController;

Auth::routes();
Route::any('pages/{slug}', [IndexController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/celebration', [HomeController::class, 'celebration']);
Route::get('/news', [HomeController::class, 'news']);
Route::resource('/admin/menu', MenuController::class);
Route::get('/publication/{slug}/{id}', [HomeController::class, 'publication'])->name('publication');
Route::get('/book/{id}',  [HomeController::class, 'show'])->name('book.show');
Route::post('contactsave', [HomeController::class, 'contactsave'])->name('contactsave');



Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('/menu', MenuController::class);
        Route::resource('/language', LanguageController::class);
        Route::resource('/publication', PublicationController::class);
        Route::resource('/news', NewsController::class);
    });
    });

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

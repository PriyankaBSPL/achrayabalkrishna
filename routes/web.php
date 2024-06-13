<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\YearController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\PublicationController;
use App\Http\Controllers\Admin\VideoGalleryController;
use App\Http\Controllers\Admin\ResearchPaperController;
use App\Http\Controllers\Admin\PhotoGallery as photoGallery;

Auth::routes();
Route::any('/admin/update_gallery_orders', [AjaxController::class, 'update_gallery_orders'])->name('/admin/update_gallery_orders');
Route::any('/admin/delete_images', [AjaxController::class, 'delete_images'])->name('/admin/delete_images');
Route::any('pages/{slug}', [IndexController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/celebration', [HomeController::class, 'celebration']);
Route::get('/news', [HomeController::class, 'news']);
Route::resource('/admin/menu', MenuController::class);
Route::get('/publication/{slug}/{id}', [HomeController::class, 'publication'])->name('publication');
Route::get('/book/{id}',  [HomeController::class, 'show'])->name('book.show');
Route::post('contactsave', [HomeController::class, 'contactsave'])->name('contactsave');


Route::any('/gallery',  [HomeController::class, 'gallery']);
Route::any('/photo_gallery_details/{id}',  [HomeController::class, 'photo_gallery_details']);
Route::get('/sub_photo_gallery/{id}', [HomeController::class, 'sub_photo_gallery']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('/menu', MenuController::class);
        Route::resource('/language', LanguageController::class);
        Route::resource('/publication', PublicationController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/photoGallery', photoGallery::class);
        Route::resource('/year', YearController::class);
        Route::resource('/research-paper', ResearchPaperController::class);
    });

});

Route::get('/videos', [VideoGalleryController::class, 'index'])->name('videos');
Route::get('/fetchMoreVideos', [VideoGalleryController::class, 'fetchMoreVideos'])->name('fetchMoreVideos');

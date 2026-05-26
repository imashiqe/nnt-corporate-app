<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'about']);
Route::get('/services', [FrontendController::class, 'services']);
Route::get('/custom-bag', [FrontendController::class, 'customBag']);
Route::get('/blog', [FrontendController::class, 'blog']);

Route::get('/blog/{id}', [FrontendController::class, 'blogDetails']);

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {

        return view('backend.dashboard');

    })->name('dashboard');

//   Route::prefix('admin')->group(function () {
    Route::resource('gallery', GalleryController::class);
// });

});

require __DIR__.'/auth.php';

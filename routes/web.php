<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'about']);
Route::get('/services', [FrontendController::class, 'services']);
Route::get('/custom-bag', [FrontendController::class, 'customBag']);
Route::get('/blog', [FrontendController::class, 'blog']);



Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {

        return view('backend.dashboard');

    })->name('dashboard');


    Route::resource('gallery', GalleryController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('client', ClientController::class);
    Route::resource('video', VideoController::class);

});
// for user

Route::get('/blog', [FrontendController::class, 'blog'])
    ->name('blog');

Route::get('/blog/{slug}', [FrontendController::class, 'blogDetails'])
    ->name('blog.details');

require __DIR__.'/auth.php';

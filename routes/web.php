<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.main');
});

Route::get('/about-us', function () {
    return view('frontend.pages.about');
});

Route::get('/services', function () {
    return view('frontend.pages.services');
});

Route::get('/custom-bag', function () {
    return view('frontend.pages.custombag');
});

Route::get('/blog', function () {
    return view('frontend.pages.blog.blog');
});

Route::get('/blog/{id}', function ($id) {
    return view('frontend.pages.blog.blogdetails');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {

        return view('backend.dashboard');

    })->name('dashboard');

});

require __DIR__.'/auth.php';

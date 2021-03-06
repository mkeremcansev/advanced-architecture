<?php

use App\Http\Controllers\web\CategoryController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\GalleryController;
use App\Http\Controllers\web\ProjectController;
use Illuminate\Support\Facades\Route;

Route::name('web.')->group(function () {
    Route::view('/', 'web.index')->name('main');
    Route::resource('/project', ProjectController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/gallery', GalleryController::class);
});

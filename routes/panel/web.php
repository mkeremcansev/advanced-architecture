<?php

use App\Http\Controllers\panel\AboutController;
use App\Http\Controllers\panel\CategoryController;
use App\Http\Controllers\panel\GalleryController;
use App\Http\Controllers\panel\NewsController;
use App\Http\Controllers\panel\ProjectController;
use App\Http\Controllers\panel\ProjectGalleryController;
use App\Http\Controllers\panel\SettingController;
use App\Http\Controllers\panel\SliderController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/')->name('panel.')->group(function () {
    Route::view('/', 'panel.index')->name('main');
    Route::resource('slider', SliderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('project-gallery', ProjectGalleryController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('about', AboutController::class);
    Route::resource('gallery', GalleryController::class);
});

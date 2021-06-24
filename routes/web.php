<?php

use App\Http\Controllers\HomePage\SpecialityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePage\SliderController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::view('/', 'admin.index')->name('admin.index');

    Route::group(['prefix' => 'home-page'], function () {
        Route::resource('home-page-slider', SliderController::class);
    });

    Route::group(['prefix' => 'home-page'], function () {
        Route::get('/home-page-speciality',[SpecialityController::class, 'index'])->name('home-page-speciality.index');
        Route::post('/home-page-speciality',[SpecialityController::class, 'store'])->name('home-page-speciality.store');
    });
});

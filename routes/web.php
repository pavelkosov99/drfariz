<?php

use App\Http\Controllers\Admin\HomePage\SliderController;
use App\Http\Controllers\Admin\HomePage\SpecialityController;
use App\Http\Controllers\Admin\HomePage\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::view('/', 'admin.index')->name('admin.index');

    Route::group(['prefix' => 'home-page'], function () {
        Route::resource('home-page-slider', SliderController::class);

        Route::get('/home-page-speciality', [SpecialityController::class, 'index'])->name('home-page-speciality.index');
        Route::post('/home-page-speciality', [SpecialityController::class, 'store'])->name('home-page-speciality.store');

        Route::get('/home-page-welcome', [WelcomeController::class, 'index'])->name('home-page-welcome.index');
        Route::post('/home-page-welcome', [WelcomeController::class, 'store'])->name('home-page-welcome.store');
    });
});

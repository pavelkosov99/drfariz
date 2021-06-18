<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsPage\SliderController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
    Route::view('/', 'admin.index')->name('admin.index');

    Route::group(['prefix' => 'home-page'], function(){
        Route::resource('home-page-slider', SliderController::class);
    });
});

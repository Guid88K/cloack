<?php

Route::resource('/', 'FrontControllers\HomeController');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('admin')->group(function () {
        Route::resource('/', 'BackControllers\HomeController');
    });
    Route::prefix('client')->group(function () {
        Route::resource('/', 'BackControllers\HomeController');
        Route::resource('/companies','CompanyController');
        Route::resource('/packet','PacketController');


    });
});
Auth::routes();

<?php

Route::get('/', 'HomeController@index');
Route::get('/menu', 'MenuController@index');
Route::resource('/blog', 'BlogController');
Route::get('/about', 'AboutController@index');

Auth::routes();

Route::middleware('admin')->prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');

    Route::resource('menu', 'MenuSettingsController');
    Route::resource('blog', 'BlogSettingsController');

    Route::get('about', 'AboutSettingsController@index');
    Route::post('about/first-section', 'AboutSettingsController@updateFirstSection');
    Route::post('about/second-section', 'AboutSettingsController@updateSecondSection');

    Route::get('slider', 'SliderController@index');
    Route::post('slider', 'SliderController@store');


});
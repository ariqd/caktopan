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
});
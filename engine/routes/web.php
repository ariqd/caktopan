<?php

Route::get('/', 'HomeController@index');
Route::get('/menu', 'MenuController@index');
Route::resource('/blog', 'BlogController');
Route::get('/about', 'AboutController@index');


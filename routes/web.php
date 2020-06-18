<?php

/*


Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/game', 'HomeController@game')->name('game');
Route::get('/joining', 'HomeController@joinGame')->name('lobby');
Route::resource('words', 'WordsController');
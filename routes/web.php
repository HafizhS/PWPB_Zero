<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dataUser', function () {
    return view('dataUser');
});

Route::get('/dataAnime', function () {
    return view('dataAnime');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/dataAnime', 'AnimeController@index');
Route::get('/tambahdataAnime', 'AnimeController@create');
Route::post('/dataAnime', 'AnimeController@store');
Route::get('/dataAnime/{id_anime}/edit', 'AnimeController@edit');
Route::patch('/dataAnime/{id_anime}', 'AnimeController@update');
Route::delete('/dataAnime/{id_anime}', 'AnimeController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

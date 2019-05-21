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
//Route::resource('anime','AnimeController');

Route::get('/browse', 'BrowseController@index')->name('browse');
Route::get('/browse/search','BrowseController@search')->name('browse.search');

Route::get('/home', 'HomeController@index');
Route::get('/tambahdataAnime', 'AnimeController@create');
Route::get('/dataAnime', 'AnimeController@index')->name('dataAnime.index');
Route::post('/dataAnime', 'AnimeController@store')->name('dataAnime.store');
Route::get('/dataAnime/{id_anime}/edit', 'AnimeController@edit')->name('dataAnime.edit');
Route::patch('/dataAnime/{id_anime}','AnimeController@update')->name('dataAnime.update');
Route::delete('/dataAnime/{id_anime}', 'AnimeController@destroy')->name('dataAnime.destroy');
Route::get('/dataAnime/{id_anime}/episode', 'AnimeController@indexEpisode')->name('dataAnime.indexEpisode');
Route::post('/dataAnime/{id_anime}/episode', 'AnimeController@storeEpisode')->name('dataAnime.storeEpisode');
Route::get('/anime/{id_anime}', 'AnimeController@detail')->name('anime.detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//TODO::
//fix tambah

<?php
use Illuminate\Support\Facades\Route;
//Auth::routes();

Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');
Route::get('/actors','ActorsController@index')->name('actors.index');
Route::get('/actors/{id}','ActorsController@actorDescription')->name('actors.description');

Route::get('/tvShows', 'TvshowsController@index')->name('tvShows.index');
Route::get('/tvShows/{movie}', 'TvshowsController@show')->name('tvShow.show');


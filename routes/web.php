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
    return view('index');
});

Route::resource('tvshows', 'TvShowsController', ['only' => ['index', 'show']]);

Route::resource('streamingservices', 'StreamingServicesController', ['only' => ['index', 'show']]);

Route::resource('reviews', 'ReviewsController', ['only' => ['index', 'show']]);

Route::middleware(['auth'])->group(function () {
    Route::resource('tvshows', 'TvShowsController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('streamingservices', 'StreamingServicesController', ['only' => ['store', 'update', 'destroy']]);
    Route::resource('reviews', 'ReviewsController', ['only' => ['store', 'update', 'destroy']]);
  });


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

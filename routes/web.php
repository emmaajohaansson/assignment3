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
    return view('welcome');
});

$router->get('/tvshows', 'TvShowsController@index');

$router->get('/tvshows/{id}', 'TvShowsController@show');

$router->post('/tvshows', 'TvShowsController@create');

$router->put('/tvshows/{id}', 'TvShowsController@update');

$router->delete('/tvshows/{id}', 'TvShowsController@destroy');


$router->get('/showstreamer', 'StreamingServicesController@index');

$router->get('/showstreamer/{id}', 'StreamingServicesController@show');

$router->post('/showstreamer', 'StreamingServicesController@create');

$router->put('/showstreamer/{id}', 'StreamingServicesController@update');

$router->delete('/showstreamer/{id}', 'StreamingServicesController@destroy');


$router->get('/reviews', 'ReviewsController@index');

$router->get('/reviews/{id}', 'ReviewsController@show');

$router->post('/reviews', 'ReviewsController@create');

$router->put('/reviews/{id}', 'ReviewsController@update');

$router->delete('/reviews/{id}', 'ReviewsController@destroy');

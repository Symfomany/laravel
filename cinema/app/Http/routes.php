<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
 * See RouteServiceProvider: Fournisseurs de routes
 */
Route::get('/', ['as' => 'home',function () {
    return view('welcome');
}]);

Route::get('/test', function () {
//    return view('test')->with('name', 'Boyer');
    return view('test',['name' => 'Boyer'])->withFirstname('lala');
});

Route::get('/homepage', function () {
    return "<h1>Test homepage</h1>";
});


/**
 * Routes for Movies
 */
Route::get('/movies', ['uses' => 'MoviesController@index', 'as' => 'movies' ]);
Route::get('/movies/list', 'MoviesController@index');
Route::any('/movies/create',['as' => 'create','uses' => 'MoviesController@getForm']);
Route::any('/movies/post',['as' => 'post','uses' => 'MoviesController@postCreate']);
Route::get('/movies/{id}', 'MoviesController@view');


/**
 * Another Routing
 */
//get('1', function() { return 'Je suis la page 1 !'; });
//get('2', function() { return 'Je suis la page 2 !'; });
//get('3', function() { return 'Je suis la page 3 !'; });

get('/{id}', function($id) {
//    return 'Je suis la page ' . $id . ' !';
    return response('Je suis la page ' . $id . ' !', 404);
})->where('id', '[1-9]+');


get('/redirect', ['as' => 'redirection', function()
{
//    return redirect('/');
    return redirect()->route('home');
}]);

get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

/**
 * <=>
 * $this->app['router']->get('/', function() { return 'Coucou'; });
 * <=>
 * app('router')->get('/', function() { return 'Coucou'; });
 */

/**
 * See Router
 * Illuminate\Routing\Router
 */

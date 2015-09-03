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

/**
 * Page de contact
 */
Route::get('/contact/{id}', ['uses' => 'PagesController@contact']);


/**
 * Routing implicit
 * ou le préfix sera users et le contrilleurs et mes routes seront devinés
 */
Route::controller('users', 'UsersController');
//Route::controller('categories', 'CategoriesController');
//Route::controller('cinema', 'CinemasController');




Route::get('/users/search/{ville?}-{zipcode?}-{enable?}',
    ['uses' => 'UsersController@search'])
    ->where([
        'ville' => '[a-zA-Z-]+',
        'zipcode'=> '[0-9]{5}',
        'enable'=> '0|1']);


Route::get('/movies/search/{langue?}-{visibilite?}-{duree?}',
    ['uses' => 'MoviesController@search'])
    ->where(['langue', 'fr|es|en', 'visibilite', '0|1', 'duree', '[1-9]{1,2}']);






Route::group(['prefix' => 'actors', 'as' => 'actors'], function () {

    /**
     * Actors index: liste les acteurs
     */
    Route::get('/index/{ville?}', ['uses' => 'ActorsController@index',
                                    'as' => '.index']);

    /**
     *  Création d'un acteur
     */
    Route::get('/create', ['uses' => 'ActorsController@create',
                            'as' => '.create']);

    /**
     * Actors read: lit un seul acteur
     */
    Route::get('/read/{id}', ['uses' => 'ActorsController@read',
        "as" => ".read"])
        ->where('id', '[0-9]+');

    /**
     * Modifie un seul acteur
     */
    Route::get('/update/{id}', ['uses' => 'ActorsController@update'])
        ->where('id', '[0-9]+');

    /**
     * Supprimer un seul acteur
     */
    Route::get('/delete/{id}', ['uses' => 'ActorsController@delete',
        "as" => ".remove"])
    ->where('id', '[0-9]+');

});






Route::group(['prefix' => 'categories', 'as' => 'categories'], function () {

    /**
     * Actors index: liste les acteurs
     */
    Route::get('/index', ['uses' => 'CategoriesController@index',
                                    'as' => '.index']);

    /**
     *  Création d'un acteur
     */
    Route::get('/create', ['uses' => 'CategoriesController@create',
                            'as' => '.create']);

    /**
     * Actors read: lit un seul acteur
     */
    Route::get('/read/{id}', ['uses' => 'CategoriesController@read',
        "as" => ".read"])
        ->where('id', '[0-9]+');

    /**
     * Modifie un seul acteur
     */
    Route::get('/update/{id}', ['uses' => 'CategoriesController@update'])
        ->where('id', '[0-9]+');

    /**
     * Supprimer un seul acteur
     */
    Route::get('/delete/{id}', ['uses' => 'CategoriesController@delete',
        "as" => ".remove"])
    ->where('id', '[0-9]+');

});








Route::group(['prefix' => 'movies', 'as' => 'movies'], function () {

    /**
     * Actors index: liste les acteurs
     */
    Route::get('/index/{bo?}/{visibilite?}/{distributeur?}', ['uses' => 'MoviesController@index',
        'as' => '.index']);

    /**
     *  Création d'un acteur
     */
    Route::get('/create', ['uses' => 'MoviesController@create',
        'as' => '.create']);

    /**
     * Actors read: lit un seul acteur
     */
    Route::get('/read/{id}', ['uses' => 'MoviesController@read',
                             'as' => '.read'])
        ->where('id', '[0-9]+');

    /**
     * Modifie un seul acteur
     */
    Route::get('/update/{id}', ['uses' => 'MoviesController@update'])
        ->where('id', '[0-9]+');

    /**
     * Supprimer un seul acteur
     */
    Route::get('/delete/{id}', ['uses' => 'MoviesController@delete'])
        ->where('id', '[0-9]+');


});













/**
 * Directors Routes
 */


Route::group(['prefix' => 'directors'], function () {
    Route::get('/index', ['uses' =>  'DirectorsController@index']);
    Route::get('/read',  ['uses' =>  'DirectorsController@read']);
    Route::get('/update', ['uses' => 'DirectorsController@update']);
    Route::get('/delete', ['uses' => 'DirectorsController@delete']);
    Route::get('/create', ['uses' => 'DirectorsController@create']);
});





/**
 * Page de FAQ
 */
Route::get('/faq', function(){
    return view('Pages/faq');
});

/**
 * Page de Mentions Légales
 */
Route::get('/mentions-legales', function(){
    return view('Pages/mt');
});





//
//Route::get('/test', function () {
////    return view('test')->with('name', 'Boyer');
//    return view('test',['name' => 'Boyer'])->withFirstname('lala');
//});
//
//Route::get('/homepage', function () {
//    return "<h1>Test homepage</h1>";
//});
//
//
///**
// * Routes for Movies
// */
//Route::get('/movies', ['uses' => 'MoviesController@index', 'as' => 'movies' ]);
//Route::get('/movies/list', 'MoviesController@index');
//Route::any('/movies/create',['as' => 'create','uses' => 'MoviesController@getForm']);
//Route::any('/movies/post',['as' => 'post','uses' => 'MoviesController@postCreate']);
//Route::get('/movies/{id}', 'MoviesController@view');
//
//
///**
// * Another Routing
// */
////get('1', function() { return 'Je suis la page 1 !'; });
////get('2', function() { return 'Je suis la page 2 !'; });
////get('3', function() { return 'Je suis la page 3 !'; });
//
//get('/{id}', function($id) {
////    return 'Je suis la page ' . $id . ' !';
//    return response('Je suis la page ' . $id . ' !', 404);
//})->where('id', '[1-9]+');
//
//
//get('/redirect', ['as' => 'redirection', function()
//{
////    return redirect('/');
//    return redirect()->route('home');
//}]);
//
//get('article/{n}', function($n) {
//    return view('article')->with('numero', $n);
//})->where('n', '[0-9]+');

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

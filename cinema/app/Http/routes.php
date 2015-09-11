<?php

/**
 *
 */



/**
 * Page de contact
 */
Route::get('/contact', ['as' => 'contact','uses' => 'PagesController@contact'
]);



/**
 * Routing implicit
 * ou le préfix sera users et le contrilleurs et mes routes seront devinés
 */
Route::controller('users', 'UsersController');
//Route::controller('categories', 'CategoriesController');
//Route::controller('cinema', 'CinemasController');


//Route::get('/auth/login',
//    ['uses' => 'AuthentificationController@login']);
//
//Route::post('/auth/authenticate',
//    ['uses' => 'AuthentificationController@authenticate', 'as' => 'authentificate']);


/**
 * Routes implicites vers mes controlleurs préconcue
 * car ces controlleurs use des traits
 * avec les fonctionnalités de l'authentification deja
 * faites( login, logout, register...)
 */
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);




// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//
//// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');




Route::group([ 'prefix' => 'admin',
    'middleware' => 'auth'
], function () {

        Route::get('/', ['as' => 'home','uses' => 'PagesController@index']);



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
             *  Reception des données du formulaire
             */
            Route::post('/post', ['uses' => 'ActorsController@store',
                                    'as' => '.post']);
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


        Route::group(['prefix' => 'comments', 'as' => 'comments'], function () {

            /**
             * Actors index: liste les acteurs
             */
            Route::get('/index', ['uses' => 'CommentsController@index',
                                            'as' => '.index']);


            /**
             *
             */
            Route::get('/comments-ajax', ['uses' => 'CommentsController@ajax',
                'as' => '.ajax']);

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
             * Actors index: liste les acteurs
             */
            Route::post('/flymovie', ['uses' => 'MoviesController@flymovie',
                'as' => '.flymovie']);


            /**
             *  Création d'un commentaire
             */
            Route::post('/comment/{id}', ['uses' => 'MoviesController@comment',
                'as' => '.comment'])->where('id', '[0-9]+');

            /**
             *  Création d'un film
             */
            Route::get('/create', ['uses' => 'MoviesController@create',
                'as' => '.create']);

            /**
             *  Création d'un film
             */
            Route::get('/trash', ['uses' => 'MoviesController@trash',
                'as' => '.trash']);


            /**
             *  Création d'un film
             */
            Route::get('/restore/{id}', ['uses' => 'MoviesController@restore',
                'as' => '.restore']) ->where('id', '[0-9]+');


            /**
             *  Création d'un film
             */
            Route::post('/store', ['uses' => 'MoviesController@store',
                'as' => '.store']);

            /**
             * Création read: lit un seul acteur
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
             * Modifie un seul acteur
             */
            Route::get('/view/{id}', ['uses' => 'MoviesController@view', 'as' => '.view'])
                ->where('id', '[0-9]+');

            /**
             * Supprimer un seul acteur
             */
            Route::get('/delete/{id}', ['uses' => 'MoviesController@remove', 'as' => '.remove'])
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

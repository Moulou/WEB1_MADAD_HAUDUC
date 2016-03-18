<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('/posts', 'PostController'); //route pour les articles

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::resource('/projet', 'ProjectController'); //route pour les projets

    Route::resource('/user', 'UserController');

    Route::resource('/commentaires', 'CommentaireController');


   Route::group(['admin', 'middleware' => 'Administrateur'], function(){ //groupe de route pour le panel admin
       Route::resource('/admin', 'AdminController');
    });


    Route::resource('/contact', 'ContactController'); //route pour la page contact
});

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



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*
|--------------------------------------------------------------------------
| Backtend Routes
|--------------------------------------------------------------------------
*/

Route::group(array('prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'),function(){

//Dashboard
	Route::get('/', array('as' => 'admin.dashboard', function () {
		return view('backend.layout.index');

	}));

	//Blog
	Route::resource('blog','BlogController');


	Route::resource('page','PageController');

//User

	Route::resource('user','UserController');


	//Category

	Route::resource('category','CategoryController');


	//Menu

	Route::resource('menu','MenuController');

	//Gallery
	Route::resource('gallery','GalleryController');

	//Comment
	Route::resource('comment','CommentController');
});

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/


Route::get('/',array('as'=>'home','uses'=>'HomeController@index'));
Route:resource('page','PageController');


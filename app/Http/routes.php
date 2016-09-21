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

Route::get('/',[
	'uses' => 'MainController@index',
	'as' => 'main.index'
]);

Route::group(['prefix' => 'admin'], function(){

	Route::get('/', ['as' => 'admin.index' ,function () {
    	return view('admin.index');
	}]);

	/* RUTAS PARA LA CREACION DE USUARIOS */
	Route::resource('users','usersController');
	Route::get('users/{id}/destroy', [
			'uses' => 'usersController@destroy',
			'as' => 'admin.users.destroy'
	]);

});

Route::group(['prefix' => 'user'], function(){

	Route::group(['middleware' => 'guest'], function(){	

		Route::post('/signin',[
			'uses' => 'usersController@postSignin',
			'as' => 'users.signin'
		]);

	});

	Route::group(['middleware' => 'auth'], function(){
		Route::get('/profile',[
			'uses' => 'usersController@getProfile',
			'as' => 'users.profile'
		]);	

		Route::get('/logout',[
			'uses' => 'usersController@getLogout',
			'as' => 'users.logout'
		]);
		
	});


});

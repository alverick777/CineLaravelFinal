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

Route::get('/', function () {
    return view('Main.main');
});

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

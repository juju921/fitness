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
    return view('welcome');
});
Route::post('auth/facebook', 'Auth\AuthController@facebook');
Route::post('auth/login', 'Auth\AuthController@login');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::post('auth/signup', 'Auth\AuthController@signup');




//Role
Route::post('role', 'JwtAuthenticateController@createRole');
Route::post('permission', 'JwtAuthenticateController@createPermission');
Route::post('assign-role', 'JwtAuthenticateController@assignRole');
Route::post('attacregisterh-permission', 'JwtAuthenticateController@attachPermission');
Route::post('check', 'JwtAuthenticateController@checkRoles');

Route::group(['prefix' => 'api', 'middleware' => ['ability:admin,create-users']], function()
{
    Route::get('users', 'JwtAuthenticateController@index');

});

Route::post('authenticate', 'JwtAuthenticateController@authenticate');

Route::resource('salle', 'sallesController');


Route::auth();

//Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

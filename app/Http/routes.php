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

/* defaut

Route::get('/', [function () {
    return view('welcome');
}]);

*/

Route::get('/', [
	'uses' => '\Chatty\Http\Controllers\HomeController@index',
	'as' => 'home',
]);

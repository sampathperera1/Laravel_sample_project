<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('forgot_password', 'AuthController@forgot');
Route::get('forgot_password/success', 'AuthController@forgotSuccess');
Route::get('activate/{token}', 'AuthController@activate');
Route::get('reset_password/{token}', 'AuthController@resetPasswd');

Route::group(array('before' => 'csrf'), function()
{
    Route::post('login', 'AuthController@handleLogin');
    Route::post('forgot_password', 'AuthController@handleForgot');
    Route::post('reset_password/{token}', 'AuthController@handelResetPasswd');
    Route::post('user', 'UserController@store'); 
});
Route::get('user', 'UserController@create'); 
Route::get('profile', 'UserController@profile');
Route::get('register/success', 'UserController@register_success');
Route::get('admin', 'UserController@userAdmin');
Route::get('toggle/{user_id}', 'UserController@userToggleStatus');
Route::post('user/profileimage', 'UserController@uploadImage');
Route::get('user/profileimage', 'UserController@uploadImage');

Route::get('/', 'UserController@create');

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

Route::get('/', 'PagesController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/promotions', 'PromotionsController@index');
Route::get('/promotions/new', 'PromotionsController@create');
Route::get('/promotions/{id}', 'PromotionsController@show');
Route::get('/promotions/{id}/edit', 'PromotionsController@edit');
Route::post('/promotions', 'PromotionsController@store');
Route::patch('/promotions', 'PromotionsController@update');
Route::delete('/promotions', 'PromotionsController@destroy');

Route::get('/users', 'UsersController@index');
Route::get('/users/{id}', 'UsersController@show');
Route::get('/users/{id}/edit', 'UsersController@edit');
Route::patch('/users', 'UsersController@update');
Route::delete('/users', 'UsersController@destroy');

Route::get('/login/{provider?}',[
    'uses' => 'Auth\AuthController@getSocialAuth',
    'as'   => 'auth.getSocialAuth'
]);
Route::get('/login/callback/{provider?}',[
    'uses' => 'Auth\AuthController@getSocialAuthCallback',
    'as'   => 'auth.getSocialAuthCallback'
]);


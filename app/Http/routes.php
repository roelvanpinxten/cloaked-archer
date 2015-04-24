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

Route::get('/', 'PagesController@home');

Route::get('home', 'PagesController@home');

Route::get('dixons/{subscription}', 'PagesController@dixons');
Route::get('dixons', 'PagesController@dixonsAll');


Route::resource('provider', 'ProviderController');

Route::get('subscription/download', 'SubscriptionController@download');
Route::get('subscription/upload', 'SubscriptionController@upload');
Route::post('subscription/upload/store', 'SubscriptionController@storeUpload');
Route::resource('subscription', 'SubscriptionController');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
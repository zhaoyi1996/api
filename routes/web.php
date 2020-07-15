<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/wx/gettoken','TestController@getToken');
Route::get('/wx/curl','TestController@getCurltoken');
Route::get('/wx/guzzle','TestController@getGuzzleToken');
Route::get('access','TestController@getapitoken');
Route::get('userinfo','TestController@userInfo');
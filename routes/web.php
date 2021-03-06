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


/*Api*/
Route::POST('/api/register','ApiController@register');
Route::POST('/api/login','ApiController@login');
Route::POST('/api/profileUpdate','ApiController@profileUpdate');
Route::get('api/logout', 'ApiController@logout');

/*Api ENd*/


/*Developer*/
Route::get('/developer', 'ArtisanController@developer')->middleware('guest:Dev');
Route::get('/developer/manageController', 'ArtisanController@manageController')->middleware('guest:Dev');
Route::POST('/developer/createController', 'ArtisanController@createController')->middleware('guest:Dev');
Route::get('/developer/loginLogs', 'ArtisanController@loginLogs')->middleware('guest:Dev');
Route::get('/developer/errorLogs', 'ArtisanController@errorLogs')->middleware('guest:Dev');
Route::get('/developer/warningLogs', 'ArtisanController@warningLogs')->middleware('guest:Dev');
Route::get('/developer/migrate', 'ArtisanController@migrate')->middleware('guest:Dev');
Route::get('/developer/cronDetails', 'ArtisanController@cronDetails')->middleware('guest:Dev');

/*Dashboard*/


Route::get('/login', 'DashController@login');
Route::post('/login', 'DashController@doLogin');
Route::get('/', 'DashController@index')->middleware('guest:Admin');
Route::get('/logout','DashController@logout');
Route::get('/fire','DashController@fire');
Route::get('/ip','DashController@ip');



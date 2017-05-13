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
Route::get('/form', function () {
    return view('form');
});
Route::get('/history','PhyreController@getData');
Route::get('/welcome','PhyreController@lala');
Route::get('/map', 'MapController@index');
Route::post('/','PhyreController@index');

Route::get('/alert','MapController@alert');

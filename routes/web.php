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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('state/fungsi_tambahan', 'StateController@fungsi_tambahan');



Route::group(['middleware' => 'auth'], function () {
    Route::resource('state', 'StateController');

    Route::get('/admin', function () {
        return view('admin');
    });
});

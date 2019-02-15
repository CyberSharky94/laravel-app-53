<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('state/pdf', 'StateController@exportPDF');
    Route::get('state/excel', 'StateController@exportExcel');

    Route::resource('state', 'StateController');

    Route::resource('profile', 'ProfileController');

    Route::get('/admin', function () {
        return view('admin');
    });

    Route::get('/email','EmailController@index');
    Route::get('/email/sent','EmailController@sent_email');
    Route::get('/email/sent_attacg','EmailController@sent_email_attach');

});

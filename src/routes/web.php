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

Route::group(['middleware' => 'language:en'], function () {
    Route::get('/', 'DefaultController@show')->name('en.default.show');
});

Route::group(['middleware' => 'language:pt-BR', 'prefix' => 'pt-br'], function () {
    Route::get('/', 'DefaultController@show')->name('pt-br.default.show');
});

Route::get('{slug}', 'LinksController@redirect')->name('links.redirect');

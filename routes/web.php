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

Route::get('/', [
    'uses' => 'Front\FrontController@index',
    'as' => 'front.index'
]);

Route::get('/about', [
    'uses' => 'Front\FrontController@about',
    'as' => 'front.about'
]);




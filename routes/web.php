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
    'as'   => 'front.index'
]);

Route::get('/contact', [
    'uses' => 'Front\FrontController@contact',
    'as' => 'front.contact'
]);

Route::get('/about', [
    'uses' => 'Front\FrontController@about',
    'as' => 'front.about'
]);

Route::get('/get-quote', [
    'uses' => 'Front\FrontController@quote',
    'as' => 'front.quote'
]);


Route::post('/get-quote', [
    'uses' => 'Front\FrontController@addQuote',
    'as' => 'front.addQuote'
]);
Route::get('/results', [
    'uses' => 'Front\FrontController@searchItems',
    'as' => 'front.search'
]);

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/admin', [
    'uses' => 'Admin\HomeController@auth',
    'as'   => 'admin.auth'
])->middleware('guest');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/control', [
        'uses' => 'Admin\HomeController@index',
        'as'   => 'admin.index'
    ]);

    Route::group(['prefix' => 'api'], function () {
        Route::post('/item/add', [
            'uses' => 'api\Admin\ItemsController@add',
            'as'   => 'api.admin.item.add'
        ]);

        Route::post('/category/add', [
            'uses' => 'api\Admin\CategoriesController@add',
            'as'   => 'api.admin.category.add'
        ]);

        Route::get('/item/load', [
            'uses' => 'api\Admin\ItemsController@load',
            'as'   => 'api.admin.item.load'
        ]);

        Route::get('/category/load', [
            'uses' => 'api\Admin\CategoriesController@load',
            'as'   => 'api.admin.category.load'
        ]);

        Route::post('/item/delete', [
            'uses' => 'api\Admin\ItemsController@delete',
            'as'   => 'api.admin.item.delete'
        ]);

        Route::post('/category/delete', [
            'uses' => 'api\Admin\CategoriesController@delete',
            'as'   => 'api.admin.category.delete'
        ]);
        
    });
});

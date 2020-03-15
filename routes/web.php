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

Route::get('/hantscho-paper-and-book-printers', [
    'uses' => 'Front\FrontController@printer',
    'as' => 'front.printer'
]);


Route::get('/category/{slug}', [
    'uses' => 'Front\FrontController@categoryItems',
    'as' => 'front.category'
]);


Route::get('/equipment/{slug}', [
    'uses' => 'Front\FrontController@item',
    'as' => 'front.item'
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

        Route::post('/item/update', [
            'uses' => 'api\Admin\ItemsController@update',
            'as'   => 'api.admin.item.update'
        ]);

        Route::post('/category/add', [
            'uses' => 'api\Admin\CategoriesController@add',
            'as'   => 'api.admin.category.add'
        ]);

        Route::post('/category/update', [
            'uses' => 'api\Admin\CategoriesController@update',
            'as'   => 'api.admin.category.update'
        ]);

        Route::get('/item/load', [
            'uses' => 'api\Admin\ItemsController@load',
            'as'   => 'api.admin.item.load'
        ]);

        Route::get('/category/load', [
            'uses' => 'api\Admin\CategoriesController@load',
            'as'   => 'api.admin.category.load'
        ]);

        Route::get('/category/load/archived', [
            'uses' => 'api\Admin\CategoriesController@loadArchived',
            'as'   => 'api.admin.category.load.archived'
        ]);

        Route::get('/quotes/load', [
            'uses' => 'api\Admin\QuotesController@load',
            'as'   => 'api.admin.quotes.load'
        ]);

        Route::get('/item/load/archived', [
            'uses' => 'api\Admin\ItemsController@loadArchived',
            'as'   => 'api.admin.item.load.archived'
        ]);

        Route::post('/item/delete', [
            'uses' => 'api\Admin\ItemsController@delete',
            'as'   => 'api.admin.item.delete'
        ]);

        Route::post('/category/delete', [
            'uses' => 'api\Admin\CategoriesController@delete',
            'as'   => 'api.admin.category.delete'
        ]);

        Route::post('/category/archive', [
            'uses' => 'api\Admin\CategoriesController@archive',
            'as'   => 'api.admin.category.archive'
        ]);        

        Route::post('/item/archive', [
            'uses' => 'api\Admin\ItemsController@archive',
            'as'   => 'api.admin.item.archive'
        ]);

        Route::post('/quotes/archive', [
            'uses' => 'api\Admin\QuotesController@archive',
            'as'   => 'api.admin.quotes.archive'
        ]);

        Route::post('/quotes/replied', [
            'uses' => 'api\Admin\QuotesController@replied',
            'as'   => 'api.admin.quotes.replied'
        ]);
    });
});

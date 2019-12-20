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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index');

    Route::group(['prefix' => 'category'],function(){
        Route::get('/','AdminCategoryController@index');
        Route::get('/add','AdminCategoryController@getAdd');
        Route::post('/add','AdminCategoryController@postAdd');

        Route::get('/edit/{id}','AdminCategoryController@getEdit');
        Route::post('/edit/{id}','AdminCategoryController@postEdit');

        Route::get('/delete/{id}','AdminCategoryController@getDelete');
    });

    Route::group(['prefix' => 'brand'],function(){
        Route::get('/','AdminBrandController@index');
        Route::get('/add','AdminBrandController@getAdd');
        Route::post('/add','AdminBrandController@postAdd');

        Route::get('/edit/{id}','AdminBrandController@getEdit');
        Route::post('/edit/{id}','AdminBrandController@postEdit');

        Route::get('/delete/{id}','AdminBrandController@getDelete');
    });

    Route::group(['prefix' => 'product'],function(){
        Route::get('/','AdminProductController@index');
        Route::get('/add','AdminProductController@getAdd');
        Route::post('/add','AdminProductController@postAdd');

        Route::get('/edit/{id}','AdminProductController@getEdit');
        Route::post('/edit/{id}','AdminProductController@postEdit');

        Route::get('/delete/{id}','AdminProductController@getDelete');
    });
});

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
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['prefix' => 'category'],function(){
        Route::get('/','AdminCategoryController@index')->name('admin.category.list');
        Route::get('/add','AdminCategoryController@getAdd')->name('admin.category.add');
        Route::post('/add','AdminCategoryController@postAdd');

        Route::get('/edit/{id}','AdminCategoryController@getEdit')->name('admin.category.edit');
        Route::post('/edit/{id}','AdminCategoryController@postEdit');

        Route::get('/delete/{id}','AdminCategoryController@getDelete')->name('admin.category.delete');
    });

    Route::group(['prefix' => 'brand'],function(){
        Route::get('/','AdminBrandController@index')->name('admin.brand.list');
        Route::get('/add','AdminBrandController@getAdd')->name('admin.brand.add');
        Route::post('/add','AdminBrandController@postAdd');

        Route::get('/edit/{id}','AdminBrandController@getEdit')->name('admin.brand.edit');
        Route::post('/edit/{id}','AdminBrandController@postEdit');

        Route::get('/delete/{id}','AdminBrandController@getDelete')->name('admin.brand.delete');
    });

    Route::group(['prefix' => 'product'],function(){
        Route::get('/','AdminProductController@index')->name('admin.product.list');
        Route::get('/add','AdminProductController@getAdd')->name('admin.product.add');
        Route::post('/add','AdminProductController@postAdd');

        Route::get('/edit/{id}','AdminProductController@getEdit')->name('admin.product.edit');
        Route::post('/edit/{id}','AdminProductController@postEdit');

        Route::get('/{action}/{id}','AdminProductController@getAction')->name('admin.product.action');
    });
});

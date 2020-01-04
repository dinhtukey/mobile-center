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

    Route::group(['prefix' => 'article'],function(){
        Route::get('/','AdminArticleController@index')->name('admin.article.list');
        Route::get('/add','AdminArticleController@getAdd')->name('admin.article.add');
        Route::post('/add','AdminArticleController@postAdd');

        Route::get('/edit/{id}','AdminArticleController@getEdit')->name('admin.article.edit');
        Route::post('/edit/{id}','AdminArticleController@postEdit');

        Route::get('/{action}/{id}','AdminArticleController@getAction')->name('admin.article.action');
    });

    //quản lý đơn hàng
    Route::group(['prefix' => 'transaction'],function(){
        Route::get('/','AdminTransactionController@index')->name('admin.transaction.list');
    });

    //quản lý thành viên
    Route::group(['prefix' => 'user'],function(){
        Route::get('/','AdminUserController@index')->name('admin.user.list');
    });
});

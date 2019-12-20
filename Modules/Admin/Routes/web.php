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
});

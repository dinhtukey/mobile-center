<?php

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::group(['prefix' => 'category'],function(){
        Route::get('/','AdminCategoryController@index')->name('admin.category.list');
        Route::get('/add','AdminCategoryController@getAdd')->name('admin.category.add');
        Route::post('/add','AdminCategoryController@postAdd');

        Route::get('/edit/{id}','AdminCategoryController@getEdit')->name('admin.category.edit');
        Route::post('/edit/{id}','AdminCategoryController@postEdit');

        Route::get('/{action}/{id}','AdminCategoryController@getAction')->name('admin.category.action');
    });

    Route::group(['prefix' => 'brand'],function(){
        Route::get('/','AdminBrandController@index')->name('admin.brand.list');
        Route::get('/add','AdminBrandController@getAdd')->name('admin.brand.add');
        Route::post('/add','AdminBrandController@postAdd');

        Route::get('/edit/{id}','AdminBrandController@getEdit')->name('admin.brand.edit');
        Route::post('/edit/{id}','AdminBrandController@postEdit');

        Route::get('/{action}/{id}','AdminBrandController@getAction')->name('admin.brand.action');
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
        Route::get('/view/{id}','AdminTransactionController@getOrder')->name('admin.transaction.getOrder');
    });

    //quản lý thành viên
    Route::group(['prefix' => 'user'],function(){
        Route::get('/','AdminUserController@index')->name('admin.user.list');
    });

    //quản lý đánh giá
    Route::group(['prefix' => 'rating'],function(){
        Route::get('/','AdminRatingController@index')->name('admin.rating.list');
    });
});

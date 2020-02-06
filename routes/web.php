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


Auth::routes();

Route::group(['namespace'=>'Auth'],function(){
   Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
   Route::post('dang-ky','RegisterController@postRegister')->name('post.register');

   Route::get('dang-nhap','LoginController@getLogin')->name('get.login'); 
   Route::post('dang-nhap','LoginController@postLogin')->name('post.login');

   Route::get('dang-xuat','LoginController@getLogout')->name('get.logout');
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('danh-muc/{slug}-{id}','CategoryController@getListProduct')->name('category.list.product');
Route::get('san-pham/{slug}-{id}','ProductController@getDetailProduct')->name('product.get.product');

Route::group(['prefix'=>'shopping'],function(){
   Route::get('/them-vao-gio-hang/{id}','ShoppingCartController@getAddCart')->name('shoppingcart.add');
   Route::get('/danh-sach','ShoppingCartController@getListCart')->name('shoppingcart.list');
   Route::get('/{action}/{id}','ShoppingCartController@getActionCart')->name('shoppingcart.action');
   Route::get('/cap-nhap','ShoppingCartController@getUpdateCart')->name('shoppingcart.update');
}); 

Route::group(['prefix'=>'gio-hang','middleware'=>'CheckLogedIn'],function(){
   Route::get('/thanh-toan','ShoppingCartController@getFormPay')->name('get.form.pay');
   Route::post('/thanh-toan','ShoppingCartController@postFormPay');
}); 

Route::get('lien-he','ContactController@getContact')->name('get.contact');
Route::post('lien-he','ContactController@postContact')->name('post.contact');

Route::group(['prefix'=>'ajax','middleware'=>'CheckLogedIn'],function(){
   Route::post('/danh-gia/{id}','RatingController@saveRating')->name('post.rating');
}); 
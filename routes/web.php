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

Route::get('/', 'UserController@index')->name('start');
Route::post('/login', 'UserController@login')->name('login');
Route::get('/logout', 'UserController@logout')->name('logout');


Route::get('/add_user', 'UserController@addUser')->name('add_user');
Route::post('/save_user', 'UserController@saveUser')->name('save_user');
Route::get('/view_users', 'UserController@viewUsers')->name('view_users');
Route::get('/edit_user/{id}', 'UserController@editUser')->name('edit_user');
Route::post('/update_user', 'UserController@updateUser')->name('update_user');
Route::get('/delete_user/{id}', 'UserController@deleteUser')->name('delete_user');



Route::get('/add_product', 'ProductController@index')->name('add_product');
Route::post('/save_product', 'ProductController@saveProduct')->name('save_product');
Route::get('/view_products', 'ProductController@viewProducts')->name('view_products');
Route::get('/edit_product/{id}', 'ProductController@editProduct')->name('edit_product');
Route::post('/update_product', 'ProductController@updateProduct')->name('update_product');
Route::get('/delete_product/{id}', 'ProductController@deleteProduct')->name('delete_product');



Route::get('/view_clients', 'ClientController@viewClients')->name('view_clients');


Route::get('/add_promotion', 'PromotionController@index')->name('add_promotion');
Route::post('/save_promotion', 'PromotionController@savePromotion')->name('save_promotion');
Route::get('/edit_promotion/{id}', 'PromotionController@editPromotion')->name('edit_promotion');
Route::post('/update_promotion', 'PromotionController@updatePromotion')->name('update_promotion');
Route::get('/view_promotions', 'PromotionController@viewPromotions')->name('view_promotions');

Route::get('/add_winner', 'PromotionController@index')->name('add_promotion');


Route::get('/add_sale', 'SaleController@addSale')->name('add_sale');
Route::post('/add_to_cart', 'SaleController@addToCart')->name('add_to_cart');
Route::get('/clear_sale', 'SaleController@clearCart')->name('clear_sale');
Route::get('/save_sale', 'SaleController@saveSale')->name('save_sale');
Route::get('/view_sales', 'SaleController@viewSales')->name('view_sales');

Route::get('/add_price', 'PriceWinnerController@addPrice')->name('add_price');
Route::post('/save_price', 'PriceWinnerController@savePrice')->name('save_price');
Route::get('/view_prices', 'PriceWinnerController@viewPrices')->name('view_prices');


Route::get('/view_current_promotions', 'WinnerController@index')->name('view_current_promotions');
Route::get('/view_winners/{id}', 'WinnerController@viewWinners')->name('view_winners');


Route::get('/buying_patterns', 'BuyingPatternsController@buyingPatterns')->name('buying_patterns');
Route::get('/view_buying_patterns/{id}', 'BuyingPatternsController@viewPatterns')->name('view_buying_patterns');


Route::get('/report', 'ReportController@report')->name('report');
Route::get('/reminder', 'ReportController@reminder')->name('reminder');









<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'ApiController@registerUser')->name('register');
Route::post('/login', 'ApiController@login')->name('login');
Route::post('/add_token', 'ApiController@addToken')->name('add_token');
Route::post('/view_points', 'ApiController@viewPoints')->name('viewPoints');
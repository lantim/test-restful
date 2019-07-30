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
Route::post('articles', 'ArticleController@store');//them
Route::get('articles', 'ArticleController@index'); //lay all
Route::get('articles/{id}', 'ArticleController@show'); // lay mot
Route::put('articles/{id}', 'ArticleController@update');//sua
Route::delete('articles/{id}', 'ArticleController@delete');//xoa
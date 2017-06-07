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

Route::get('/posts', 'APIPostsController@index');
Route::post('/posts/create', 'APIPostsController@store');
Route::get('/posts/{id}', 'APIPostsController@show');
Route::put('/posts/{id}/edit','APIPostsController@update');
Route::delete('/posts/{id}/delete', 'APIPostsController@destroy');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/content/create', 'ContentController@create');

Route::post('/content/create', 'ContentController@store');

Route::get('/content', 'ContentController@index');

Route::get('/content/edit/{id}','ContentController@edit');
Route::post('/content/edit/{id}','ContentController@update');
Route::delete('/content/delete/{id}','ContentController@destroy');

 
 
 

 


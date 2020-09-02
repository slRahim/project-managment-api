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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register','Api\RegisterController@register');

// Route::get('/projects','Api\ProjectController@index');
// Route::post('/projects','Api\ProjectController@store');
// Route::get('/projects/{id}','Api\ProjectController@show');
// Route::put('/projects/{id}','Api\ProjectController@update');
// Route::delete('/projects/{id}','Api\ProjectController@destroy'); 

Route::middleware('auth:api')->group(function () {
    Route::resource('/projects','Api\ProjectController');
});

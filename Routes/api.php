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

Route::post('/admin/slider','SliderController@store');
Route::post('/admin/sliders','SliderController@index');

Route::middleware('auth:api')->get('/slider', function (Request $request) {
    return $request->user();
});

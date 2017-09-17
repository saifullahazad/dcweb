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


Route::post('/user/register','UserInfoController@register');
Route::post('/user/login','UserInfoController@login');
Route::post('/user/logout','UserInfoController@logout');

Route::post('/treatment/request','TreatmentController@RequestNow');
Route::post('/treatment/mypendingrequests','TreatmentController@MyPendingRequests');
Route::post('/treatment/myclosedrequests','TreatmentController@MyClosedRequests');
Route::post('/treatment/update','TreatmentController@Update');
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




Route::auth();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');


Route::get('/', 'BaseController@index');

Route::group(['middleware' => 'auth'], function() {

//all user only route goes here. okey
    Route::get('/doctor-list', 'BaseController@doctorList');
    Route::get('/doctor/details/{id}', 'BaseController@doctorDetails');

    Route::get('/patient-list', 'BaseController@patientList');
    Route::get('/patient/details/{id}', 'BaseController@patientDetails');

    Route::get('/treatment', 'BaseController@treatment');
    Route::post('/treatment-update', 'BaseController@treatmentUpdate');
    Route::get('/treatment/details/{id}', 'BaseController@treatmentDetails');

    Route::get('/registration', 'UserInfoController@registration');
    Route::post('/registration', 'UserInfoController@create');

});
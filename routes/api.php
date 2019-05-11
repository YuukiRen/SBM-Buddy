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



Route::prefix('auth')->group(function () {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::get('refresh', 'AuthController@refresh');
    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('user', 'AuthController@user');
        Route::post('logout', 'AuthController@logout');
    });
});
Route::group(['middleware' => 'auth:api'], function(){
    // Users
    Route::get('users', 'UserController@index')->middleware('isAdmin');
    Route::get('users/{id}', 'UserController@show')->middleware('isAdminOrSelf');
    // Testing Area
    // Route::get('/coba','PaketController@nangis');
    // Admin Function
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('paket', 'PaketController');
    Route::resource('jurusan', 'JurusanController');
    Route::resource('soal', 'SoalController');
    
    Route::post('/grading','SoalController@checkAns');
    
    Route::post('/getUser','UserController@whoami');
    Route::post('/updJurusan','UserController@updateJurusan');

    Route::post('/getProgress','RaporController@getData');
    Route::post('/getData','PaketController@getData');
    Route::post('/getUniv','JurusanController@getData');
    Route::post('/getSoal','SoalController@getData');
    
    Route::post('/getSoalFisika','SoalController@fisika');
    Route::post('/getSoalKimia','SoalController@kimia');
    Route::post('/getSoalBiologi','SoalController@biologi');
    Route::post('/getSoalMath','SoalController@math');

});
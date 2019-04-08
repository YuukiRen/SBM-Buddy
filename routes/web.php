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

Route::get('/', function () {
    return view('welhom');
});

<<<<<<< HEAD
//Route::get('/{name}', function() {
//	return redirect('/');
//})->where('name', '[A-Za-z]+');
=======
// Route to handle page reload in Vue except for api routes
Route::get('/{any?}', function (){
    return view('welhom');
})->where('any', '^(?!api\/)[\/\w\.-]*');
>>>>>>> 826ca314037d1bdc82722bb39524b3afbb8541c8

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('paket', 'PaketController');
Route::resource('jurusan', 'JurusanController');
Route::post('/getData','PaketController@getData');
Route::post('/getUniv','JurusanController@getData');

// Admin route
Auth::routes();

Route::GET('admin/home','AdminController@index');
Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm');

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
    return view('admin.auth.login');
});





Auth::routes();


Route::group(['middleware'=>'auth'],function (){
    Route::get('/home', 'HomeController@index')->name('home');
    //User Controller
    Route::get('/create/user','UserController@create')->name('/create/user');
    Route::post('/store/user','UserController@store')->name('/store/user');
    Route::get('/all/users','UserController@index')->name('/all/user');
    Route::get('/user/{id}','UserController@destroy')->name('/user/{id}');
    Route::get('/show/user','UserController@show')->name('/show/user');
    Route::get('/user/{id}/edit','UserController@edit')->name('/user/{id}/edit');
    Route::post('/user/{id}/update','UserController@update')->name('/user/{id}/update');

    // Student Controller

    Route::get('create/student','studentController@create')->name('create/student');
});

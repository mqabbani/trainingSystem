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
    Route::get('/create/student','studentController@create')->name('/create/student');
    Route::post('store/student','StudentController@store')->name('store/student');
    Route::get('/all/student','StudentController@index')->name('/all/student');
    Route::get('/search/student','StudentController@search')->name('/search/student');
    Route::get('/student/{id}/edit','StudentController@edit')->name('/student/{id}/edit');
    Route::post('/student/{id}/update','StudentController@update')->name('/student/{id}/update');
    Route::get('/student/{id}/show','StudentController@show')->name('/student/{id}/show');

    //Course
    Route::get('/create/course','CourseController@create')->name('/create/course');
    Route::get('/ajax/request/{course_name1}','CourseController@ajaxReq');
    Route::post('/save/new/course','CourseController@store')->name('/save/new/course');
    Route::get('/all/course','CourseController@index')->name('/all/course');
    Route::get('/course/{id}/edit','CourseController@edit')->name('/course/{id}/edit');
    Route::post('/course/{id}/update','CourseController@update')->name('/course/{id}/update');
    //
    Route::get('/register/student/course','CourseStudentController@create')->name('/register/student/course');
    Route::post('/register/student/course','CourseStudentController@store')->name('/register/student/course');

    //Payment
    Route::get('/add/{std_id}/{course_id}/payment','PaymentController@create')->name('/add/{std_id}/{course_id}/payment');
    Route::post('/add/payment','PaymentController@store')->name('/add/payment');


});

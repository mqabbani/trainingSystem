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

use App\Course;
use App\Student;

Route::get('/', function () {
    return view('admin.auth.login');
});

//Route::get('/home','LoginController@index')->name('/home');



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
    Route::get('/delete/{id}/student','StudentController@destroy')->name('/delete/{id}/student');
    Route::get('/create/contract','StudentController@createContract')->name('/create/contract');

    //Course
    Route::get('/create/course','CourseController@create')->name('/create/course');
    Route::get('/ajax/request/{course_name1}','CourseController@ajaxReq');
    Route::post('/save/new/course','CourseController@store')->name('/save/new/course');
    Route::get('/all/course','CourseController@index')->name('/all/course');
    Route::get('/course/{id}/edit','CourseController@edit')->name('/course/{id}/edit');
    Route::post('/course/{id}/update','CourseController@update')->name('/course/{id}/update');
    Route::get('/show/{id}/course','CourseController@show')->name('/course/{id}/course');
    Route::get('/pending/course','CourseController@pending')->name('/pending/course');
    Route::get('/active/course','CourseController@active')->name('/active/course');
    Route::get('/finished/course','CourseController@finished')->name('/finished/course');
    //
    Route::get('/register/student/course/{sp_number}','CourseStudentController@create')->name('/register/student/course/{sp_number}');
    Route::get('/register/student/course','CourseStudentController@createManullay')->name('/register/student/course');
    // Register To Course Manually
    Route::post('/register/student/course','CourseStudentController@store')->name('/register/student/course');

    //Payment
    Route::get('student/{stdId}/payment/{courseId}/details','PaymentController@specificPayment')->name('student/{stdId}/payment/{courseId}/details');
    Route::get('/add/{std_id}/{course_id}/payment','PaymentController@create')->name('/add/{std_id}/{course_id}/payment');
    Route::post('/add/payment','PaymentController@store')->name('/add/payment');
    Route::get('payment/details','PaymentController@index')->name('payment/details');
    Route::post('payment/details','PaymentController@returnAllPaymentForStudent')->name('payment/details');
    //Questions
    Route::get('add/new/question','ExamController@create')->name('add/new/question');
    Route::post('add/new/question','ExamController@store')->name('add/new/question');
    Route::get('/all/questions','ExamController@index')->name('/all/questions');
    Route::get('/search/question','ExamController@search')->name('/search/question');
    Route::get('/edit/{id}/question','ExamController@edit')->name('/edit/{id}/question');
    Route::post('/update/{id}/question','ExamController@update')->name('/update/{id}/question');
    Route::get('/delete/{id}/question','ExamController@destroy')->name('/delete/{id}/question');
    Route::get('/print/exam','ExamController@print')->name('/print/exam');
    Route::post('print/random/questions','ExamController@randomExam')->name('print/random/questions');

    // Mark
    Route::get('/add/{stdid}/{courseid}/mark','MarkController@create')->name('/add/{stdid}/{courseid}/mark');
    Route::post('/add/mark','MarkController@store')->name('/add/mark');
    //Report`s
    Route::get('student/marks','ReportController@studentMarks')->name('student/marks');

    Route::get('/get/student/course','ReportController@getCourse')->name('/get/student/course');

});







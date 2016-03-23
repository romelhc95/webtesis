<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/template', function () {
    return view('secretary.createdocument');
});

Route::resource('document', 'DocumentController');
Route::get('careers/{id}', 'DocumentController@getCareer');
Route::get('areas/{id}', 'DocumentController@getArea');
Route::get('lines/{id}', 'DocumentController@getLine');

Route::resource('student', 'ThesisStudentController');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

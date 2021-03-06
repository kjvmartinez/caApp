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
    return view('index');
});

Route::resource('participant','ParticipantController');
Route::resource('attendance/nameattendance','ByNameController');

Route::get('/attendance/report','ReportController@index');
Route::get('/attendance/report/search','ReportController@search');
Route::get('/search','ByNameController@search');
Route::get('attendance/nameattendance', 'ByNameController@index');
Route::get('attendance/qrattendance', 'AttendanceController@index');
Route::post('attendance/qrattendance', 'AttendanceController@store');
Route::post('attendance/nameattendance/{id}', 'ByNameController@store');

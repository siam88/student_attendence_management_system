<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('/login/adminlogin');
// });

Route::get('login','App\Http\Controllers\studentController@login');
Route::get('dashboard','App\Http\Controllers\studentController@dashboard');

Route::post('islogin','App\Http\Controllers\studentController@studentloged');
Route::get('details','App\Http\Controllers\studentController@show');
Route::get('student_edit/{id}',['as'=>'student.edit','uses'=>'App\Http\Controllers\studentController@edit']);
Route::post('student_update/{id}',['as'=>'student.update','uses'=>'App\Http\Controllers\studentController@update']);

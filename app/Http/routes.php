<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('student/{student_no}',function($student_no){
    return "學號:".$student_no;
});
Route::get('student/{student_no}/score',function($student_no){
    return "學號:".$student_no."的所有成績";
});
Route::get('student/{student_no}/score/{subject?}',function($student_no,$subject=null){
    return "學號:".$student_no."的".((is_null($subject))?"所有項目":$subject)."成績";
});
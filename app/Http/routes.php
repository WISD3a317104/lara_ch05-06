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
Route::pattern('student_no','s[0-9]{10}');
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'student'],function(){
    Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>function($student_no){
             return "學號:".$student_no;
        }
    ]);
    Route::get('{student_no}/score/{subject?}',[
        'as'=>'student.score',
        'uses'=>function($student_no,$subject=null){
            return "學號:".$student_no."的".((is_null($subject))?"所有項目":$subject)."成績";
        }
    ])->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)']);
});



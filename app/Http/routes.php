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
Route::get('/', 'HomeController@index');
Route::pattern('student_no','s[0-9]{10}');

Route::group(['prefix'=>'student'],function(){
    Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>'StudentController@getStudentData'
    ]);
    Route::get('{student_no}/score/{subject?}',[
        'as'=>'student.score',
         'uses'=>'StudentController@getStudentScore'
    ])->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)']);
});
Route::controller('board','BoardController');
#Route::get('cool', 'Cool\TestController@index');
Route::group(['namespace'=>'Cool'],function(){
    Route::get('cool', 'TestController@index');
});


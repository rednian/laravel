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

  // Route::get('/login', 'AuthController@showLoginForm');

  Route::auth();

  Route::group(['middleware'=>'auth'],function(){

    Route::get('/', 'EmployeeController@index')->name('employee.index');
    Route::get('/employee/create', 'EmployeeController@create')->name('employee.create');
    Route::post('/employee/store', 'EmployeeController@store')->name('employee.store');
    Route::get('/employee/upload', 'EmployeeController@getUpload')->name('employee.upload');
    Route::post('/employee/upload', 'EmployeeController@postUpload')->name('employee.upload');
  
  });


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@index') -> name('emp-index');
Route::get('/emp/{id}', 'EmployeeController@show') -> name('emp-show');
Route::get('/emp', 'EmployeeController@create') -> name('emp-create');
Route::post('/emp/store', 'EmployeeController@store') -> name('emp-store');
Route::get('/emp/destroy/{id}', 'EmployeeController@destroy') -> name('emp-destroy');
Route::get('/emp/edit/{id}', 'EmployeeController@edit') -> name('emp-edit');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//get
Route::get('employees', 'EmployeeController@getEmployee');
//getbyid
Route::get('employee/{id}', 'EmployeeController@getEmployeeId');
//add
Route::post('addemployee', 'EmployeeController@addEmployee');
//update
Route::put('employee/{id}', 'EmployeeController@updateEmployee');
//delete
Route::delete('employee/{id}', 'EmployeeController@DeleteEmployee');

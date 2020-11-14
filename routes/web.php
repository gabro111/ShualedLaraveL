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

Route::get('/company/adder', '\App\Http\Controllers\companyController@companyAdder');
Route::get('/listAll', '\App\Http\Controllers\companyController@listAll');
Route::get('/', '\App\Http\Controllers\companyController@listAll');

Route::post('/company/add', '\App\Http\Controllers\companyController@companyAdd');
Route::post('/employee/add', '\App\Http\Controllers\employeeController@employeeAdd');

Route::post('/company/delete', '\App\Http\Controllers\companyController@companyDelete');
Route::post('/employee/delete', '\App\Http\Controllers\employeeController@employeeDelete');

Route::get('/company/indiv', '\App\Http\Controllers\companyController@openIndivEdit');
Route::get('/employee/indiv', '\App\Http\Controllers\employeeController@openIndivEdit');

Route::post('/Company/update', '\App\Http\Controllers\companyController@updateCompany');
Route::post('/employee/update', '\App\Http\Controllers\employeeController@updateEmployee');


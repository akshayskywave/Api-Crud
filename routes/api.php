<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;
use App\Http\Controllers\Biocontroller;
use App\Http\Controllers\employeecontroller;
use App\Http\Controllers\medicalcontroller;



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

Route::post('/student',[Apicontroller::class, 'store']);
Route::post('/bio',[Biocontroller::class, 'biostore']);
Route::post('/employee',[employeecontroller::class, 'empstore']);
Route::post('/medical',[medicalcontroller::class, 'medistore']);

Route::get('/student',[Apicontroller::class, 'stushow']);
Route::get('/bio',[Biocontroller::class, 'bioshow']);
Route::get('/employee',[employeecontroller::class, 'empshow']);
Route::get('/medical',[medicalcontroller::class, 'medishow']);

Route::get('/student/{id}',[Apicontroller::class, 'stushowid']);
Route::get('/bio/{id}',[Biocontroller::class, 'bioshowid']);
Route::get('/employee/{id}',[employeecontroller::class, 'empshowid']);
Route::get('/medical/{id}',[medicalcontroller::class, 'medishowid']);
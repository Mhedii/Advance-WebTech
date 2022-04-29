<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\EmployeeDetailsController;


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

Route::post('/signup',[LoginController::class, 'signuppost']);
Route::get('/login',  [LoginController::class, 'loginget']);
Route::post('/login', [LoginController::class, 'loginpost']);
Route::get('/userList', [LoginController::class, 'userList']);
Route::get('/userEdit/{id}/{name}',[LoginController::class,'userEdit']);
Route::post('/userEdit',[LoginController::class,'userEditSubmitted']);
Route::get('/userDelete/{id}/{name}',[LoginController::class,'userDelete']);


Route::get('/productDetails', [ProductDetailsController::class, 'productDetails']);
Route::get('/employeeDetails', [EmployeeDetailsController::class, 'employeeDetails']);
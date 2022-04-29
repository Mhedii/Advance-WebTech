<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\EmployeeDetailsController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/signup', [LoginController::class, 'signupget'])->name('signup');
Route::post('/signup',[LoginController::class, 'signuppost'])->name('signup');
Route::get('/login',  [LoginController::class, 'loginget'])->name('login');
Route::post('/login', [LoginController::class, 'loginpost'])->name('login');
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/userList', [LoginController::class, 'userList'])->name('userList');
Route::get('/userEdit/{id}/{name}',[LoginController::class,'userEdit']);
Route::post('/userEdit',[LoginController::class,'userEditSubmitted'])->name('userEdit');
Route::get('/userDelete/{id}/{name}',[LoginController::class,'userDelete']);


Route::get('/productDetails', [ProductDetailsController::class, 'productDetails'])->name('productDetails');
Route::get('/employeeDetails', [EmployeeDetailsController::class, 'employeeDetails'])->name('employeeDetails');
Route::get('/employeeDetailsEdit', [EmployeeDetailsController::class, 'employeeDetails'])->name('employeeDetails');
// Route::post('/employeeDetailsEdit',[EmployeeDetailsController::class,'employeeDetailsEditSubmitted'])->name('employeeDetailsEdit');
// Route::get('/employeeDetailsDelete/{id}/{name}', [EmployeeDetailsController::class, 'employeeDetails'])->name('employeeDetails');
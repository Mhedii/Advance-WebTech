<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\studentcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/service', [PagesController::class, 'service'])->name('service');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/team', [PagesController::class, 'team'])->name('team');

// Registration
Route::get('/signup', [studentcontroller::class, 'signupget'])->name('signup');
Route::post('/signup', [studentcontroller::class, 'signuppost'])->name('signup');
// Login
Route::get('/login', [studentcontroller::class, 'loginget'])->name('login');
Route::post('/login', [studentcontroller::class, 'loginpost'])->name('login');
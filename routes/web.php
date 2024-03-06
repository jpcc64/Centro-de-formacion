<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class,'index']);

Route::get('/courses/{id}',[CourseController::class,'findCourse']);

Route::get('/search',[IndexController::class,'search']);

Route::resource('/login', UserController::class);

Route::get('/registro', [RegisterController::class,'index']);
Route::post('/registro', [RegisterController::class,'registrar'])->name('registro');

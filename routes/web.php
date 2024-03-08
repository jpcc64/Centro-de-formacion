<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginContronller;
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

Route::view('/login', 'login')->name('login');
Route::view('/registro', 'registro')->name('registro');
Route::get('/privada', [UserController::class,'showProfile'])->middleware('auth')->name('privada');

Route::post('/validate', [LoginContronller::class,'registro'])->name('validar');
Route::post('/inicia-sesion', [LoginContronller::class,'login'])->name('inicia-sesion');
Route::get('/logout', [LoginContronller::class,'logout'])->name('logout');

Route::post('/favoritecourse', [CourseController::class, 'createFavouriteCourse'])->name('favoritos');
Route::delete('/borrarFav/{id}', [CourseController::class, 'deleteFavouriteCourse'])->name('borrar');
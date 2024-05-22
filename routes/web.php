<?php

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

Route:: view('/','home');
Route::get('home',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('aboutus',[App\Http\Controllers\HomeController::class,'index1'])->name('aboutus');
Route::get('contactus',[App\Http\Controllers\HomeController::class,'create'])->name('contactus');
Route::post('contactus/store',[App\Http\Controllers\HomeController::class,'store'])->name('contactus/store');



Route::get('student',[App\Http\Controllers\StudentController::class,'create'])->name('student');
Route::get('student/index',[App\Http\Controllers\StudentController::class,'index'])->name('student/index');
Route::post('student/store',[App\Http\Controllers\StudentController::class,'store'])->name('student/store');
Route::put('student/update/{id}',[App\Http\Controllers\StudentController::class,'update'])->name('student.update');
Route::get('student/{id}/edit',[App\Http\Controllers\StudentController::class,'edit'])->name('student.edit');
Route::delete('student/{id}/destroy',[App\Http\Controllers\StudentController::class,'destroy'])->name('student.destroy');
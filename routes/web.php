<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
Route::get('student',[StudentController::class,'index'])->name('list.students');
Route::get('add',[StudentController::class,'addstudent']);
Route::post('save-student',[StudentController::class,'savestudent']);
Route::get('edit-student/{id}',[StudentController::class,'updatestudent']);
Route::post('update',[StudentController::class,'saveupdate']);
Route::delete('students/{id}',[StudentController::class,'destroy']);
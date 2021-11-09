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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/editstudent',[\App\Http\Controllers\StudentController::class,'show']);
Route::get('/editstudent/{id}',[\App\Http\Controllers\StudentController::class,'Edit']);

Route::get('/editsubject',[\App\Http\Controllers\SubjectController::class,'show']);
Route::get('/editsubject/{id}',[\App\Http\Controllers\SubjectController::class,'Editsubject']);



Route::view('dashboard', 'admin-view.dashboard');
Route::view('addstudent', 'admin-view.newstudent');
Route::view('addteacher', 'admin-view.newteacher');
Route::view('addsubject', 'admin-view.newsubject');
Route::view('addteacher', 'admin-view.assignteacher');


Route::view('login', 'admin-view.sgin');

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

Route::middleware(['student','auth'])->group( function (){
    Route::view('student/dashboard','student-view.studentdasboard');
    Route::view('student/classschedule','student-view.schedule');

});

Route::middleware(['teacher','auth'])->group( function (){
    Route::view('teacher/dashboard','teacher-view.teacherindex');
    Route::view('teacher/classschedule','teacher-view.schedule');
});

Route::middleware(['admin','auth'])->group( function (){
    Route::view('/dashboard', 'admin-view.dashboard');
    Route::get('/editstudent',[\App\Http\Controllers\StudentController::class,'show']);
    Route::get('/editstudent/{id}',[\App\Http\Controllers\StudentController::class,'Edit']);
    Route::get('/editsubject',[\App\Http\Controllers\SubjectController::class,'show']);
    Route::get('/editsubject/{id}',[\App\Http\Controllers\SubjectController::class,'Editsubject']);
    Route::view('/addstudent', 'admin-view.newstudent');
    Route::view('/addteacher', 'admin-view.newteacher');
    Route::view('/addsubject', 'admin-view.newsubject');
    Route::view('/addclass', 'admin-view.assignteacher');
    Route::view('/classschedule', 'admin-view.schedule');
    Route::view('/Assign', 'admin-view.assignclass');
});






Route::view('login', 'admin-view.sgin')->name('login');

Route::post('logout',[\App\Http\Controllers\logout::class,'logout']);



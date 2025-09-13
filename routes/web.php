<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ClasessController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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

//  Route::get('/', function (){
//     return view('home');
// });

//  Route::get('/student', function (){
//     return view('index')->name('student.index');
// });
Route::get('/',[PageController::class,'home'])->name('home');

Route::resource('/home/student', studentController::class)->names([
    'index' => 'student.list',
    'create' => 'student.create',
    'store' => 'student.store',
    'destroy' =>'student.destroy',
]);
Route::resource('/home/teachers', TeacherController::class)->names([
    'index' => 'teachers.list',
    'create' => 'teachers.create',
    'store' => 'teachers.store',
    'destroy' =>'teachers.destroy',
]);
// Route::get('/home/subject',[SubjectController::class,'subject'])->name('subject.add');
Route::resource('/home/subjects', SubjectController::class)->names([
    'index' => 'subjects.list',
    'create' => 'subjects.create',
    'store' => 'subjects.store',
    'destroy' =>'subjects.destroy',
]);
Route::resource('/home/clasess', ClasessController::class)->names([
    'index' => 'clasess.list',
    'create' => 'clasess.create',
    'store' => 'clasess.store',
    'destroy' =>'clasess.destroy',
]);

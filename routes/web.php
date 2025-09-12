<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
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

 Route::get('/', function (){
    return view('home');
});

//  Route::get('/student', function (){
//     return view('index')->name('student.index');
// });
Route::resource('/home/student', studentController::class)->names([
    'index' => 'student.list',
    'create' => 'student.create',
    'store' => 'students.store',
    'destroy' =>'student.destroy',
]);

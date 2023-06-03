<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Registration/form',[TacherController::class, 'Registration'])->name('registration');
Route::post('/Registration/form',[TacherController::class, 'RegistrationSubmit'])->name('registration');
Route::post('/Login/form',[TacherController::class, 'LoginSubmit'])->name('loginsubmit');
Route::get('/StudentList',[DatabaseController::class, 'StudentList'])->name('StudentList');
Route::post('/Student/Add',[DatabaseController::class, 'AddStudent'])->name('AddStudent');
Route::get('/Student/Add',[DatabaseController::class, 'AddStudentview'])->name('AddStudent');
Route::get('/StudentList/{id}',[DatabaseController::class, 'deleteStudent'])->name('deleteStudent');
Route::get('/StudentList/Update/{id}',[DatabaseController::class, 'UpdateStudentview'])->name('UpdateStudent');
Route::post('/StudentList/Update',[DatabaseController::class, 'UpdateStudent'])->name('UpdateStudent');


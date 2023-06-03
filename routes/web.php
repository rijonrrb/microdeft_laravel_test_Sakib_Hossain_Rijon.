<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatabaseController;

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
Route::get('/StudentList',[DatabaseController::class, 'StudentList'])->name('StudentList');
Route::post('/Student/Add',[DatabaseController::class, 'AddStudent'])->name('AddStudent');
Route::get('/Student/Add',[DatabaseController::class, 'AddStudentview'])->name('AddStudent');
Route::get('/StudentList/{id}',[DatabaseController::class, 'deleteStudent'])->name('deleteStudent');
Route::get('/Student/Update',[DatabaseController::class, 'UpdateStudentview'])->name('UpdateStudent');
Route::get('/StudentList/{id}',[DatabaseController::class, 'UpdateStudent'])->name('UpdateStudent');


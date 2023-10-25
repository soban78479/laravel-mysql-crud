<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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

Route::get('/form', function () {
    return view('pages.form');
})->name('form');

// Route::get('/table', function () {
//     return view('pages.table');
// })->name('table');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


// Route::get('/form', [FormController::class, 'index']);
Route::post('/table', [FormController::class, 'submit']);
Route::get('/table', [FormController::class, 'showStudents'])->name('table');
Route::get('/student/delete/{id}',  [FormController::class, 'delete'])->name('student.delete');  
Route::get('/student/edit/{id}',  [FormController::class, 'edit'])->name('student.edit');  
Route::post('/student/update/{id}',  [FormController::class, 'update'])->name('student.update');  


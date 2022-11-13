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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/hostel/add-hostal', [App\Http\Controllers\Admin\HostelController::class, 'index'])->middleware(['auth']);
Route::post('/admin/hostel/save-hostal', [App\Http\Controllers\Admin\HostelController::class, 'create'])->middleware(['auth']);
Route::get('/admin/hostel/view-hostal', [App\Http\Controllers\Admin\HostelController::class, 'viewData'])->middleware(['auth']);
Route::get('/admin/hostel/edit-hostal/{id}', [App\Http\Controllers\Admin\HostelController::class, 'editData'])->middleware(['auth']);
Route::post('/admin/hostel/update-hostal/{id}', [App\Http\Controllers\Admin\HostelController::class, 'updateData'])->middleware(['auth']);

//student
Route::get('/admin/student/add-student', [App\Http\Controllers\Admin\StudentController::class, 'index'])->middleware(['auth']);
Route::post('/admin/student/save-student', [App\Http\Controllers\Admin\StudentController::class, 'create'])->middleware(['auth']);
Route::get('/admin/student/view-student', [App\Http\Controllers\Admin\StudentController::class, 'viewData'])->middleware(['auth']);
Route::get('/admin/student/edit-student/{id}', [App\Http\Controllers\Admin\StudentController::class, 'editData'])->middleware(['auth']);
Route::get('/admin/student/appeal-reject/{id}', [App\Http\Controllers\Admin\StudentController::class, 'appealReject'])->middleware(['auth']);
Route::get('/admin/student/appeal-confirm/{id}', [App\Http\Controllers\Admin\StudentController::class, 'appealConfirm'])->middleware(['auth']);
Route::get('/admin/student/appeal', [App\Http\Controllers\Admin\StudentController::class, 'appeal'])->middleware(['auth']);
Route::post('/admin/student/update-student/{id}', [App\Http\Controllers\Admin\StudentController::class, 'updateData'])->middleware(['auth']);
Route::post('/admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware(['auth']);

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashBoardController::class, 'index'])->middleware(['auth']);
//user
Route::get('/student/home', [App\Http\Controllers\Student\StudentController::class, 'index'])->middleware(['auth']);
Route::post('/student/appeal/{id}', [App\Http\Controllers\Student\StudentController::class, 'appeal'])->middleware(['auth']);
Route::get('/student/all-student', [App\Http\Controllers\Student\StudentController::class, 'allStudent'])->middleware(['auth']);
Route::get('/student/all-hostel', [App\Http\Controllers\Student\StudentController::class, 'allHostel'])->middleware(['auth']);
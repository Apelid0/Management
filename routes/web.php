<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\TakeController;
use App\Http\Controllers\TeacheController;
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

//Landing Page login
Route::get('/', function () {return view('auth/login');});

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//School
Route::get('/school', [SchoolController::class, 'index'])->name('school.index');

//Calendar
Route::get('/calendar', [TakeController::class, 'index'])->name('calendar.index');

//Teacher
Route::get('/teacher', [TeacheController::class, 'index'])->name('teacher.index');
Route::post('/teacher', [TeacheController::class, 'create_teacher_subject']);

//Shift
Route::get('/shift', [ShiftController::class, 'index'])->name('shift.index');
Route::post('/shift', [ShiftController::class, 'create_shift']);
Route::post('/shift/search', [ShiftController::class, 'search'])->name('shift.search');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TakeController;
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

//index login
Route::get('/', function () {return view('auth/login');});

//dashboard
Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');

//
Route::get('/school', [SchoolController::class, 'index'])->name('school.index');

//Calendar
Route::get('/calendar', [TakeController::class, 'index'])->name('calendar.index');





require __DIR__.'/auth.php';

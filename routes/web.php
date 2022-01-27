<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\CinemaController;


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

//Home routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/create', [App\Http\Controllers\HomeController::class, 'store'])->name('create');

//Cinemas route
//Route::get('/cinemas/index', [App\Http\Controllers\CinemaController::class, 'index'])->name('cinemas.index');
Route::resource('cinemas',CinemaController::class);

//Admission
//Route::get('/admissions/index', [App\Http\Controllers\AdmissionController::class, 'index'])->name('admissions.index');
Route::resource('admissions', AdmissionController::class);

//Schedule route
//Route::get('/schedule/index', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule.index');
Route::resource('schedule', ScheduleController::class);
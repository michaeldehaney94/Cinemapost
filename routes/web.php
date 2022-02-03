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

Route::get('/edit/{movie}/', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::patch('/edit/{movie}', [App\Http\Controllers\HomeController::class, 'update'])->name('edit');
Route::delete('/edit/{movie}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('edit');


//Cinemas route
Route::resource('cinemas',CinemaController::class);

//Schedule route
Route::resource('schedule', ScheduleController::class);

//Admission
Route::resource('admissions', AdmissionController::class);


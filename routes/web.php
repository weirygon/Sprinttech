<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use Illuminate\Routing\Controllers\Middleware;
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

Route::get('/', [DoctorController::class, 'index'])->middleware(['auth']);

Route::get('/patient/create', [PatientController::class, 'create']);
Route::get('/doctor/create', [DoctorController::class, 'create'])->name('add');

Route::get('/patient/{id}', [PatientController::class, 'show']);

Route::post('/patient/store', [PatientController::class, 'store']);
Route::post('/doctor/store', [DoctorController::class, 'store']);

Route::post('/exam/store', [ExamController::class, 'store']);
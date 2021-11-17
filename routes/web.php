<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DoctorController;
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
    return view('layouts.master');
});

Route::get('pacient', [PacienteController::class, 'index']);
Route::post('pacient/create', [PacienteController::class, 'store']);

Route::get('pacient/create', function () {
    return view('createPacient');
});

Route::get('doctor', [DoctorController::class, 'index']);
Route::post('doctor/create', [DoctorController::class, 'store']);

Route::delete('/doctor/{id}', [DoctorController::class, 'destroy']);

Route::post('/update', [DoctorController::class, 'update']);

Route::get('doctor/create', function () {
    return view('createDoctor');
});

Route::get('listall', [DoctorController::class, 'list']);
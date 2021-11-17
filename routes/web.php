<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DoctorController;
use App\Models\Doctor;
use App\Models\Paciente;
use GrahamCampbell\ResultType\Result;
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

// main page
Route::get('/', function () {
    return view('layouts.master');
});

//pacient list
Route::get('pacient', [PacienteController::class, 'index']);

//creating the pacient
Route::post('pacient/create', [PacienteController::class, 'store']);

//create pacient view
Route::get('pacient/create', function () {
    return view('createPacient');
});

//doctor list
Route::get('doctor', [DoctorController::class, 'index']);

//creating the doctor view
Route::get('doctor/create', function () {
    return view('createDoctor');
});

//creating the doctor
Route::post('doctor/create', [DoctorController::class, 'store']);

//delete the doctor
Route::delete('/doctor/{id}', [DoctorController::class, 'destroy'], ['id' => $id]);

Route::get('/edit', function () {
    return view('edit');
});

//update
Route::post('/update', [DoctorController::class, 'update']);

//the patient and doctor list
Route::get('listall', [DoctorController::class, 'list']);



//exercise 2 php
Route::get('doctors_patients', function(){
    $allDocs = Doctor::all();
    $allPac = Paciente::all();
    $result = [];
    foreach($allDocs as $doc){
        $pacients = [];
        foreach($allPac as $pac){
            if($pac->doctor_id == $doc->id){
                array_push($pacients, $pac->nombre);

            }
        }
        $result[$doc->nombre] = $pacients;
    }
    $html = "";

    foreach($result as $key => $arrayvalue){
        $html = $html . "<ul>$key";
            foreach($arrayvalue as $value){
                $html = $html . "<li>$value</li>";
            }

        $html = $html . "</ul>";
    }


    return $html;
});


//exercise 3 php
Route::get('doctors_patients2', function(){
    $allDocs = Doctor::all();
    $max = 0;
    $count = 0;
    foreach($allDocs as $doc){
        $max = $max + intval($doc->num_pacientes);
        $count++;
    }
    $avg = $max / $count;
    $html = "The average is: $avg <br>";
    foreach($allDocs as $doc){
        if(intval($doc->num_pacientes) >= $avg){
            $html = $html . "$doc->nombre $doc->apellidos: with the cant of patients: $doc->num_pacientes<br>";
        }
    }
    return $html;
});
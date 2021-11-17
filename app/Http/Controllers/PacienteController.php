<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        return view('pacientList')->with('allPacients', Paciente::all());
    }
    
    
    
    public function store(Request $request)
    {
        Paciente::create(
            ['nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'dni' => $request->dni,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'vacunado' => $request->vacunado],
        );   
    }

}

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
        if($this->validation($request)){
            Paciente::create(
                ['nombre' => $request->nombre,
                'apellidos' => $request->apellidos,
                'dni' => $request->dni,
                'fecha_nacimiento' => $request->fecha_nacimiento,
                'vacunado' => $request->vacunado],
            );
        }
    }


    private function validation(Request $request){
        $id = $request->dni;
        $birthdate = $request->fecha_nacimiento;

        $birthdate = strval($birthdate);
    
        if(strlen($id) == 9 && strlen($id) != 0){
            $idNum = intval(substr($id, 0, strlen($id) - 1));
            $idLetter = substr($id, strlen($id) - 1, strlen($id));
            if(is_numeric($idNum) && is_string($idLetter)){
                if(substr($birthdate, 2, 1) == '-' && substr($birthdate, 5, 1) == '-'){
                    return true;
                }
            }
            
        }
        return false;
    }


}

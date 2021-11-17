<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Paciente;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctorList')->with('allDoctors', Doctor::all());
    }
    
    
    
    public function store(Request $request)
    {
        Doctor::create(
            ['nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'num_pacientes' => $request->num_pacientes,],
        );
        return redirect('/doctor');
    }


    public function destroy($id)
    {
        Doctor::destroy($id);
        return redirect('/doctor');
    }


    public function list()
    {
        

        return view('listall')->with('allDoctors', Doctor::all())->with('allPacients', Paciente::all());
    }

    public function update(Request $request)
    {
        $nomDoc = $request->doctors;
        $nomPac = $request->pacients;
        
        Doctor::where('active', 1)
      	->where('destination', 'San Diego')
      	->update(['delayed' => 1]);

    }

}

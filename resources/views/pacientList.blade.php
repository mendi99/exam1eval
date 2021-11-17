@extends('layouts.master')
@section('content')
<a href="/pacient/create">Create Pacient</a><br>
    <table>
        <thead>
            <tr>
                nombre
            </tr>
            <tr>
                apellidos
            </tr>
            <tr>
                dni
            </tr>
            <tr>
                fecha_nacimiento
            </tr>
            <tr>
                vacunado
            </tr>
            <tr>
               doctor_id
            </tr>
        </thead>
        <tbody>
        @foreach($allPacients as $pacient)
            <tr>
                <td>{{ $pacient->nombre }}</td>
            </tr>
            <tr>
                <td>{{ $pacient->apellidos }}</td>
            </tr>
            <tr>
                <td>{{ $pacient->dni }}</td>
            </tr>
            <tr>
                <td>{{ $pacient->fecha_nacimiento }}</td>
            </tr>
            <tr>
                <td>{{ $pacient->vacunado }}</td>
            </tr>
            <tr>
                <td>{{ $pacient->doctor_id }}</td>
            </tr>

            
        @endforeach
        </tbody>
    </table>
@endsection
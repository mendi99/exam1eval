@extends('layouts.master')
@section('content')
<a href="/doctor/create">Create Doctor</a><br>
    <table>
        <thead>
            <tr>
                nombre
            </tr>
            <tr>
                apellidos
            </tr>
            <tr>
                num_pacientes
            </tr>
        </thead>
        <tbody>
        @foreach($allDoctors as $doctor)
            <tr>
                <td>{{ $doctor->nombre }}
                    </td>
                </tr>
                <tr>
                    <td>{{ $doctor->apellidos }}</td>
                </tr>
                <tr>
                    <td>{{ $doctor->num_pacientes }}
                    <form method="POST" action="/doctor/{{ $doctor->id }}">
                        @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                    <form method="GET" action="/edit">
                        <input type="submit" value="Edit">
                    </form>
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
@endsection
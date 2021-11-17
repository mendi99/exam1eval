@extends('layouts.master')
@section('content')
    <form method="POST" action="/pacient/create">
        @csrf
        Name:
        <input type="text" name="nombre">
        Lastname:
        <input type="text" name="apellidos">
        Dni:
        <input type="text" name="dni">
        Birthdate:
        <input type="text" name="fecha_nacimiento">
        Vaccinated:
        <select name="vacunado">
            <option value="true">Yes</option>
            <option value="false">No</option>
        </select>
        <input type="submit" value="Submit">
    </form>
@endsection

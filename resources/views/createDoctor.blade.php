@extends('layouts.master')
@section('content')
    <form method="POST" action="/doctor/create">
        @csrf
        Name:
        <input type="text" name="nombre">
        Lastname:
        <input type="text" name="apellidos">
        Number of pacients:
        <input type="text" name="num_pacientes">
        <input type="submit" value="Submit">
    </form>
@endsection
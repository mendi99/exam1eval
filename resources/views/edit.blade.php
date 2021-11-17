@extends('layouts.master')
@section('content')
    <form method="POST" action="/edit/">
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
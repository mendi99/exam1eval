@extends('layouts.master')
@section('content')
<form method="POST" action="/update">
    <select name="doctors">
        @foreach($allDoctors as $doc)
            <option>{{ $doc->nombre }}</option>
        @endforeach
    </select>
    <select name="pacients">
        @foreach($allPacients as $pacient)
            <option>{{ $pacient->nombre }}</option>
        @endforeach
    </select>
    <input type="submit" value="Submit">
</form>
@endsection
@extends('layout') 

@section('content') 
    <h3>Godkända Annonser</h3>
    @foreach($approved as $reservation)
        <a href="/reservations/{{$reservation->id}}/edit">
            ID: {{ $reservation->id}} {{ $reservation->title}}
        </a>
        <br>
    @endforeach
    <br>
    <h3>Inte Godkända Annonser</h3>
    @foreach($notApproved as $reservation)
        <a href="/reservations/{{$reservation->id}}/edit">
            ID: {{ $reservation->id}} {{ $reservation->title}}
        </a>
        <br>
    @endforeach
@endsection
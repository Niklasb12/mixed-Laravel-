@extends('layout') 

@section('content') 
    <div class="Admin_Container">
        <h1 class="Admin_Headline"> RESERVATIONS TO APPROVE </h1>
        <p class="Admin_Paragraph"> APPROVED </p>
        @foreach($approved as $reservation)
            <p class="Admin_Reservation-Link"><a href="/reservations/{{$reservation->id}}/edit">
                Reservation: {{ $reservation->id }}, {{ $reservation->user->name }}
            </a></p>
            <br>
        @endforeach
        <br>
        <p class="Admin_Paragraph-NotApproved"> NOT APPROVED </p>
        @foreach($notApproved as $reservation)
            <p class="Admin_Reservation-Link"><a href="/reservations/{{$reservation->id}}/edit">
                Reservation: {{ $reservation->id }}, {{ $reservation->user->name }}
            </a></p>
            <br>
        @endforeach
        <br>
        <p class="Admin_Paragraph-NotApproved"> IN PROCESS </p>
        @foreach($inProcess as $reservation)
            <p class="Admin_Reservation-Link"><a href="/reservations/{{$reservation->id}}/edit">
                Reservation: {{ $reservation->id }}, {{ $reservation->user->name }}
            </a></p>
            <br>
        @endforeach
    </div>
@endsection
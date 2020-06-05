@extends('layout') 

@section('content') 
<body class="Reservations_Body">
    <div class="Create_Container">
        @foreach ($reservations as $reservation)
            <div class="Create_Content">
                <h1> RESERVATIONS </h1>
        {{-- <a href="/reservations/{{ $reservation->id }}"> --}}
                <p>Type : {{ $reservation->reservationType}}</p>
                <p>Date : {{ $reservation->date}}</p>
                <p>Amount : {{ $reservation->amount}}</p>
        {{-- </a> --}}
            </div>
        @endforeach
    </div>
    <a href="/reservations/create">Create</a>
</body>
@endsection
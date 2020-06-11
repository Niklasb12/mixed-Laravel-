@extends('layout') 

@section('content') 
<body class="Reservations_Body">
    <p class="Reservations_Link"><a href="/reservations/create"> NEW RESERVATION</a></p>
    @if (\App\User::findOrFail(auth()->id())->isAdmin())
    <p class="Reservations_Link"><a href="{{ url('admin') }}">ADMIN</a></p>
    @endif
    <div class="Reservations_Container">
        @foreach ($reservations as $reservation)
            <div class="Reservations_Content">
                <h1 class="Reservations_Headline"> RESERVATION </h1>
                @if ($reservation->approved==0)
                    <p class="Reservations_Paragraph-notApproved"> Not Approved </p>
                @endif
                @if ($reservation->approved==2)
                <p class="Reservations_Paragraph-notApproved"> In process </p>
                @endif
                <p class="Reservations_Paragraph"> Type: {{ $reservation->reservationType }}</p>
                <p class="Reservations_Paragraph"> Time: {{ $reservation->time }}</p>
                <p class="Reservations_Paragraph"> Date: {{ $reservation->date }}</p>
                <p class="Reservations_Paragraph"> Amount: {{ $reservation->amount }}</p>
                <div class="Reservation-Btn_Container">
                    <a class="Reservation-Btn" href="reservations/{{ $reservation->id }}/edit"> Update </a>
                    <form class="Form"method="POST"action="/reservations/{{ $reservation->id }}">
                        @method('DELETE')
                        @csrf
                        <div>
                            <button class="Reservation-Btn" type="submit">
                                {{ __('Delete') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</body>
@endsection
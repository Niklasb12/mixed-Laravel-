@extends('layout') 

@section('content') 
<body class="Reservations_Body">
    @guest
    @else
    <p class="Reservations_Link"><a href="/reviews/create"> NEW REVIEW</a></p>
    @endguest
    <div class="Reservations_Container">
        @foreach ($reviews as $review)
            <div class="Reservations_Content">
                <h1 class="Reservations_Headline"> REVIEWS </h1>
        {{-- <a href="/reservations/{{ $reservation->id }}"> --}}
                <p class="Reservations_Paragraph"> Title: {{ $review->title }}</p>
                <p class="Reservations_Paragraph"> Content: {{ $review->content }}</p>
        {{-- </a> --}}
                <div class="Reservation-Btn_Container">
                    <form class="Form"method="POST"action="/reviews/{{ $review->id }}">
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
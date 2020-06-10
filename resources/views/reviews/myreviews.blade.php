@extends('layout') 

@section('content') 
<body class="Review_Body">
    @guest
    @else
    <p class="Review_Link"><a href="/reviews/create"> NEW REVIEW</a></p>
    @endguest
    <div class="Review_Container">
        @foreach ($reviews as $review)
            <div class="Review_Content">
                <h1 class="Review_Headline"> REVIEWS </h1>
                <p class="Review_Paragraph"> Title: {{ $review->title }}</p>
                <p class="Review_Paragraph"> Content: {{ $review->content }}</p>
                <div class="Reservation-Btn_Container">
                    <form class="Form"method="POST"action="/reviews/{{ $review->id }}">
                        @method('DELETE')
                        @csrf
                        <div class="Review_Button">
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
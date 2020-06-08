@extends('layout') 

@section('content') 
<body class="Review_Body">
    @guest
    @else
    <div class="Review_Link-Container">
        <p class="Review_Link"><a href="/reviews/create"> NEW REVIEW</a></p>
        <p class="Review_Link"><a href="/myreviews"> MY REVIEWS</a></p>
    </div>
    @endguest
    <div class="Review_Container">
        @foreach ($reviews as $review)
            <div class="Review_Content">
                <h1 class="Review_Headline"> REVIEWS </h1>
        {{-- <a href="/reservations/{{ $reservation->id }}"> --}}
                <p class="Review_Paragraph"> Title: {{ $review->title }}</p>
                <p class="Review_Paragraph"> Content: {{ $review->content }}</p>
                <p class="Review_Paragraph"> Content: {{ $review->user->name }}</p>
        {{-- </a> --}}
            </div>
        @endforeach
    </div>
</body>
@endsection


@extends('layout')


@section('content')

<h1> CREATE A NEW PROJECT </h1>
 
 <form class="Form" method="POST" action="/reservations">
    {{ csrf_field() }}
    <div>
        <input type="text" name="reservationType" placeholder="reservationType">
    </div>
    <div>
        <textarea name="date" placeholder="2006-05-15"></textarea>
    </div>
    <div>
        <textarea name="amount" placeholder="How many?"></textarea>
    </div>
    <div>
        <button type="submit"> Book now </button>
    </div>
 </form>

@endsection
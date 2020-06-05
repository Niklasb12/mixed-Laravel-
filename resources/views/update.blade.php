@extends('layout')


@section('content')
<body class="Reservations_Body">
    <div class="Login">
        <div class="Create_Container">
            <form class="Form" method="POST" action="/reservations">
                {{ csrf_field() }}
                <div class="Create_Form-Input">
                    <input type="text" name="reservationType" placeholder="Lunch or Dinner" value="{{ $reservations->reservationType }}">
                </div>
                <div class="Create_Form-Input">
                    <input name="date" placeholder="Date" value="{{ $reservations->date }}">
                </div>
                <div class="Create_Form-Input">
                    <input name="amount" placeholder="Amount of guests" value="{{ $reservations->amount }}">
                </div>
                <div class="Create_Form-Btn_Container">
                    <button class="Create_Form-Btn" type="submit"> Update </button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
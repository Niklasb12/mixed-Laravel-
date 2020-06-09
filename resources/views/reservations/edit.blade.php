@extends('layout')


@section('content')
<body class="Reservations_Body">
    <div class="Login">
        <div class="Create_Container">
            <form class="Form" method="POST" action="/reservations/{{ $reservations->id }}">
                @method('PATCH')
                @csrf
                <select class="Create_Form-Select" name="reservationType" id="">
                    <option class="disabled" value="{{ $reservations->reservationType }}" selected>{{ $reservations->reservationType }}</option>
                    <option value="lunch">Lunch</option>
                    <option value="dinner">Dinner</option>
                </select>

                <select class="Create_Form-Select-Time" name="time" id="">
                    <option class="disabled" value="{{ $reservations->time }}" disabled selected> {{ $reservations->time }} </option>
                    <option class="disabled" value="" disabled> lunch </option>
                    <option value="11.00">11.00</option>
                    <option value="12.00">12.00</option>
                    <option value="13.00">13.00</option>
                    <option value="14.00">14.00</option>
                    <option value="15.00">15.00</option>
                    <option class="disabled" value="" disabled> dinner </option>
                    <option value="17.00">17.00</option>
                    <option value="18.00">18.00</option>
                    <option value="19.00">19.00</option>
                    <option value="20.00">20.00</option>
                    <option value="21.00">21.00</option>
                    <option value="22.00">22.00</option>
                </select>
                <div class="Create_Form-Input">
                    <input name="date" placeholder="Date" value="{{ $reservations->date }}">
                </div>
                <div class="Create_Form-Input">
                    <input name="amount" placeholder="Amount of guests" value="{{ $reservations->amount }}">
                </div>
                @if ($user->isAdmin())
                <div>
                    <input type="checkbox" name="approved" value="true" {{$reservations->approved == 1 ? 'checked' : ''}}>
                    <label for="approved">Godkänd</label>
                </div>
                @endif
                <div class="Create_Form-Btn_Container">
                    <button class="Create_Form-Btn" type="submit"> Update </button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
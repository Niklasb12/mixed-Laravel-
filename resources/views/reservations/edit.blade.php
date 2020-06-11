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
                    @foreach ($categories as $category)
                    <option value="{{ $category->category}}">{{ $category->category }}</option>
                    @endforeach
                </select>

                <select class="Create_Form-Select-Time" name="time" id="">
                    <option class="disabled" value="{{ $reservations->time }}" selected> {{ $reservations->time }} </option>
                    @foreach ($times as $time)
                    <option value="{{ $time->time }}">{{ $time->time }}</option>
                    @endforeach
                </select>
                <div class="Create_Form-Input">
                    <input name="date" placeholder="Date" value="{{ $reservations->date }}">
                </div>
                <div class="Create_Form-Input">
                    <input name="amount" placeholder="Amount of guests" value="{{ $reservations->amount }}">
                </div>
                @if ($user->isAdmin())
                <div>
                    <input type="checkbox" name="approved" value="1" {{$reservations->approved == 1 ? 'checked' : ''}}>
                    <label for="approved"> Approve </label>
                </div>
                @endif
                <div class="Create_Form-Btn_Container">
                    <button class="Create_Form-Btn" type="submit"> Update </button>
                </div>
            </form>
        </div>
    </div>
    @foreach ($errors->all() as $error)

    <p class="Create_Error">{{ $error }}</p>

 @endforeach
</body>
@endsection
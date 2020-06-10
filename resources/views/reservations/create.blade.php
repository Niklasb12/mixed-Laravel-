@extends('layout')


@section('content')
    <body class="Reservations_Body">
        <div class="Login">
            <div class="Create_Container">
                <form class="Form" method="POST" action="/reservations">
                    {{ csrf_field() }}
                    {{-- <div class="Create_Form-Input">
                        <input type="text" name="reservationType" placeholder="Lunch or Dinner">
                    </div> --}}
                    <select class="Create_Form-Select" name="reservationType" id="">
                        <option class="disabled" value="" disabled selected>lunch or dinner</option>
                        @foreach ($times as $time)
                        <option value="{{ $time->category->category}}">{{ $time->category->category }}</option>
                        @endforeach
                    </select>
                    <select class="Create_Form-Select-Time" name="time" id="">
                        <option class="disabled" value="" disabled selected> what time? </option>
                        @foreach ($times as $time)
                        <option value="{{ $time->time }}">{{ $time->time }}</option>
                        {{-- <option class="disabled" value="" disabled> lunch </option>
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
                        <option value="22.00">22.00</option> --}}
                        @endforeach
                    </select>
                    <div class="Create_Form-Input">
                        <input class="Input_Date" type="date" name="date" placeholder="Date">
                    </div>
                    <div class="Create_Form-Input">
                        <input class="Input_Amount" name="amount" placeholder="Amount of guests">
                    </div>
                    <div class="Create_Form-Btn_Container">
                        <button class="Create_Form-Btn" type="submit"> Book now </button>
                    </div>
                </form>
            </div>
        </div>
        @foreach ($errors->all() as $error)

           <p class="Create_Error">{{ $error }}</p>

        @endforeach
    </body>
@endsection
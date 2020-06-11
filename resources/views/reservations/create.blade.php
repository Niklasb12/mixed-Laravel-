@extends('layout')
 
@section('content')
    <body class="Reservations_Body">
        <div class="Login">
            <div class="Create_Container">
                <form class="Form" method="POST" action="/reservations">
                    {{ csrf_field() }}
                    <select class="Create_Form-Select" name="reservationType" id="">
                        <option class="disabled" value="" disabled selected>lunch or dinner</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->category}}">{{ $category->category }}</option>
                        @endforeach
                    </select>
                    <select class="Create_Form-Select-Time" name="time" id="">
                        <option class="disabled" value="" disabled selected> what time? </option>
                        @foreach ($times as $time)
                            <option value="{{ $time->time }}">{{ $time->time }}</option>
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
                @foreach ($errors->all() as $error)
                    <p class="Create_Error">{{ $error }}</p>
                @endforeach
            </div>
        </div>
    </body>
@endsection
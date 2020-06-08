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
                        <option value="lunch">Lunch</option>
                        <option value="dinner">Dinner</option>
                    </select>
                    <div class="Create_Form-Input">
                        <input class="Input_Date" type="date" name="date" placeholder="Date">
                    </div>
                    <div class="Create_Form-Input">
                        <input name="amount" placeholder="Amount of guests">
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
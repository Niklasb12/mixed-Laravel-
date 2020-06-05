@extends('layout')


@section('content')
    <body class="Reservations_Body">
        <div class="Login">
            <div class="Create_Container">
                <form class="Form" method="POST" action="/reservations">
                    {{ csrf_field() }}
                    <div class="Create_Form-Input">
                        <input type="text" name="reservationType" placeholder="Lunch or Dinner">
                    </div>
                    <div class="Create_Form-Input">
                        <input name="date" placeholder="Date">
                    </div>
                    <div class="Create_Form-Input">
                        <input name="amount" placeholder="Amount of guests">
                    </div>
                    <div class="Create_Form-Btn_Container">
                        <button class="Create_Form-Btn" type="submit"> Book now </button>
                    </div>
                </form>
            </div>
            @foreach ($errors->all() as $error)
    
               <p class="Create_Error">{{ $error }}</p>
    
            @endforeach
        </div>
    </body>
@endsection
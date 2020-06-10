@extends('layout')


@section('content')
    <body class="Reservations_Body">
        <div class="Login">
            <div class="Create_Container">
                <form class="Form" method="POST" action="/reviews">
                    {{ csrf_field() }}
                    <div class="Create_Form-Input">
                        <input class="Input_Date" type="text" name="title" placeholder="Title">
                    </div>
                    <div class="Create_Form-Input">
                        <textarea name="content" placeholder="Content"></textarea>
                    </div>
                    <div class="Create_Form-Btn_Container">
                        <button class="Create_Form-Btn" type="submit"> Create Review </button>
                    </div>
                </form>
            </div>
        </div>
        @foreach ($errors->all() as $error)

           <p class="Create_Error">{{ $error }}</p>

        @endforeach
    </body>
@endsection
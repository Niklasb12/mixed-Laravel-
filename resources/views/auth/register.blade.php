@extends('layout')

@section('content')
<body class="Login_Body">
    <div class="Login">
        <div class="Login_Container">
            <form class="Login_Form" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="Login_Form-Email">
                    <div class="Error">
                        <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="Login_Form-Password">
                    <div class="Error">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>            
                </div>
                <div class="Login_Form-Password">
                    <div class="Error">
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="Login_Form-Password">
                    <div class="col-md-6">
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="Login_Form-Btn_Container">
                    <button class="Login_Form-Btn" type="submit" class="btn btn-primary">
                        {{ __('SignUp') }}
                    </button>
                    <a class="Login_Form-Btn-Link-SignUp" href="/login"> LogIn </a>
                </div>
            </form>
        </div>
    </div>
</body> 
@endsection

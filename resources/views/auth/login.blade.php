@extends('layout')

@section('content')
<body class="Login_Body">
    <div class="Login">
        <div class="Login_Container">
            <form class="Login_Form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="Login_Form-Email">
                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="Login_Form-Password">
                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                  
                </div>
                <div class="Login_Form-Remember">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="Login_Form-Remember-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <div class="Login_Form-Btn_Container">
                    <button class="Login_Form-Btn" type="submit">
                        {{ __('LogIn') }}
                    </button>
                    <a class="Login_Form-Btn-Link-SignUp" href="/register"> SignUp </a>
                    @if (Route::has('password.request'))
                        <a class="Login_Form-Btn-Link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>
@endsection

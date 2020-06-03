@extends('layout')

@section('content')
<div class="Login">
    <div class="Login_Container">
    <form class="Login_Form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="Login_Form-Email">
    <label for="email">{{ __('email:') }}</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror
    </div>
    <div class="Login_Form-Password">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label> 
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
    </span>
    @enderror 
    </div>
    <div class="Login_Form-Remember">
    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    <label class="form-check-label" for="remember">
    {{ __('Remember Me') }}
    </label>
    </div>
    <div class="Login_Form-Btn">
    <button type="submit" class="btn btn-primary">
    {{ __('Login') }}
    </button>
    @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
    {{ __('Forgot Your Password?') }}
    </a>
    @endif
    </div>
    </form>
    </div>
   </div>
@endsection

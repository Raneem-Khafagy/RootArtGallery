@extends('layouts.app')
@section('active_login')
active
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="login-section-wrapper">
            <div class="brand-wrapper">
                <img src="{{asset('storage/logo/contact.png')}}" alt="logo" class="logo">
            </div>
            <div class="login-wrapper">
                <h1 class="login-title">{{ __('Login') }}</h1>

                <div class="container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password">{{ __('Password') }}</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group row">

                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label remember-me" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="row">
                            <button type="submit" id="login" class="btn btn-block login-btn">
                                {{ __('Login') }}
                            </button>
                            <p class="login-wrapper-footer-text">Don't have an account? <a
                                    href="{{ route('register') }}" class="text-reset">Register
                                    here</a></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

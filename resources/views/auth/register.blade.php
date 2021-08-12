@extends('layouts.app')
@section('active_register')
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
                <h1 class="login-title">{{ __('Register') }}</h1>

                  <div class="container">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                         <div class="form-group row">
                            <label for="name">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="row">

                                <button type="submit"  class="btn btn-block login-btn">
                                    {{ __('Register') }}
                                </button>
                        </div>

                        <div class="row">
                            <p class="login-wrapper-footer-text">Already have an account? <a
                                    href="{{ route('login') }}" class="text-reset">Login here</a></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

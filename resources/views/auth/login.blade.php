@extends('layouts.auth')

@section('content')
    <div class="auth">
        <div class="auth__left">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="auth__logo">
            <h2 class="auth__heading">Welcome back our lovely creator.</h2>
            <img src="{{ asset('images/auth-login.svg') }}" alt="Animated working man" class="auth__image">
        </div>
        <div class="auth__right">
            <form method="POST" action="{{ route('login') }}" class="auth__form">
                @csrf
                <h3 class="auth__heading">Login</h3>
                <h4 class="auth__subheading">Please login and continue your journey with us</h4>
                <div class="auth__divider"></div>
                <div class="auth__input-group">
                    <div class="auth__input-inline">
                        <label for="email" class="auth__input-label">Email</label>
                        <input class="auth__input-field" type="email" id="email" name="email" required
                               value="{{ old('email') }}">
                        @error('email')
                        <span class="auth__input-error">{{ $errors->first('email') }}</span>
                        @enderror
                    </div>
                </div>
                <div class="auth__input-group">
                    <div class="auth__input-inline">
                        <label for="password" class="auth__input-label">Password</label>
                        <input class="auth__input-field" type="password" id="password" name="password" required
                               value="{{ old('password') }}">
                        @error('password')
                        <span class="auth__input-error">{{ $errors->first('password') }}</span>
                        @enderror
                    </div>
                </div>
                <div class="auth__input-group">
                    <button type="submit" class="auth__btn">Login</button>
                </div>
                <div class="auth__input-group">
                    <span class="auth__change-view">Already have an account? <a href="{{ route('register') }}"
                                                                                class="auth__change-view-link">Sign Up</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection

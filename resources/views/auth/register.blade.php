@extends('layouts.auth')

@section('content')
    <div class="auth">
        <div class="auth__left">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}" alt="Logo" class="auth__logo"></a>
            <div class="auth__hero">
                <h2 class="auth__heading">A few clicks away from starting earning money</h2>
                <img src="{{ asset('images/auth-register.svg') }}" alt="Animated working man" class="auth__image">
            </div>
        </div>
        <div class="auth__right">
            <form method="POST" action="{{ route('register') }}" class="auth__form">
                @csrf
                <h3 class="auth__heading">Register</h3>
                <h4 class="auth__subheading">Make your content billable today</h4>
                <p class="auth__info">Let's get you all set up so you can verify your personal account and begin setting
                    up
                    your profile.</p>
                <div class="auth__divider"></div>
                <div class="auth__input-group auth__input-group--inline">
                    <div class="auth__input-inline">
                        <label for="username" class="auth__input-label">Username</label>
                        <input class="auth__input-field" type="text" id="username" name="username" required
                               value="{{ old('username') }}">
                        @error('username')
                        <span class="auth__input-error">{{ $errors->first('username') }}</span>
                        @enderror
                    </div>
                    <div class="auth__input-inline">
                        <label for="email" class="auth__input-label">Email</label>
                        <input class="auth__input-field" type="email" id="email" name="email" required
                               value="{{ old('email') }}">
                        @error('email')
                        <span class="auth__input-error">{{ $errors->first('email') }}</span>
                        @enderror
                    </div>
                </div>
                <div class="auth__input-group auth__input-group--inline">
                    <div class="auth__input-inline">
                        <label for="first_name" class="auth__input-label">First name</label>
                        <input class="auth__input-field" type="text" id="first_name" name="first_name" required
                               value="{{ old('first_name') }}">
                        @error('first_name')
                        <span class="auth__input-error">{{ $errors->first('first_name') }}</span>
                        @enderror
                    </div>
                    <div class="auth__input-inline">
                        <label for="last_name" class="auth__input-label">Last name</label>
                        <input class="auth__input-field" type="text" id="last_name" name="last_name" required
                               value="{{ old('last_name') }}">
                        @error('last_name')
                        <span class="auth__input-error">{{ $errors->first('last_name') }}</span>
                        @enderror
                    </div>
                </div>
                <div class="auth__input-group auth__input-group--inline">
                    <div class="auth__input-inline">
                        <label for="password" class="auth__input-label">Password</label>
                        <input class="auth__input-field" type="password" id="password" name="password" required
                               value="{{ old('password') }}">
                        @error('password')
                        <span class="auth__input-error">{{ $errors->first('password') }}</span>
                        @enderror
                    </div>
                    <div class="auth__input-inline">
                        <label for="password_confirmation" class="auth__input-label">Confirm password</label>
                        <input class="auth__input-field" type="password" id="password_confirmation"
                               name="password_confirmation" required
                               value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                        <span class="auth__input-error">{{ $errors->first('password_confirmation') }}</span>
                        @enderror
                    </div>
                </div>
                <div class="auth__input-group">
                    <button type="submit" class="auth__btn">Create Account</button>
                </div>
                <div class="auth__input-group">
                    <span class="auth__change-view">Already have an account? <a href="{{ route('login') }}"
                                                                                class="auth__change-view-link">Log in</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection

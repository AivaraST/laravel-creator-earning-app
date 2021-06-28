@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content">
            <div class="auth">
                <form method="POST" action="{{ route('user.update') }}" class="auth__form">
                    @csrf
                    {{ method_field('PUT') }}
                    <h3 class="auth__heading">Update your profile information.</h3>
                    <div class="auth__input-group auth__input-group--inline">
                        <div class="auth__input-inline">
                            <label for="username" class="auth__input-label">Username</label>
                            <input class="auth__input-field" type="text" id="username" name="username" required
                                   value="{{ $user->username }}">
                            @error('username')
                            <span class="auth__input-error">{{ $errors->first('username') }}</span>
                            @enderror
                        </div>
                        <div class="auth__input-inline">
                            <label for="email" class="auth__input-label">Email</label>
                            <input class="auth__input-field" type="email" id="email" name="email" required
                                   value="{{ $user->email }}">
                            @error('email')
                            <span class="auth__input-error">{{ $errors->first('email') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="auth__input-group auth__input-group--inline">
                        <div class="auth__input-inline">
                            <label for="first_name" class="auth__input-label">First name</label>
                            <input class="auth__input-field" type="text" id="first_name" name="first_name" required
                                   value="{{ $user->first_name }}">
                            @error('first_name')
                            <span class="auth__input-error">{{ $errors->first('first_name') }}</span>
                            @enderror
                        </div>
                        <div class="auth__input-inline">
                            <label for="last_name" class="auth__input-label">Last name</label>
                            <input class="auth__input-field" type="text" id="last_name" name="last_name" required
                                   value="{{ $user->last_name }}">
                            @error('last_name')
                            <span class="auth__input-error">{{ $errors->first('last_name') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="auth__input-group auth__input-group--inline">
                        <div class="auth__input-inline">
                            <label for="password" class="auth__input-label">Password</label>
                            <input class="auth__input-field" type="password" id="password" name="password">
                            @error('password')
                            <span class="auth__input-error">{{ $errors->first('password') }}</span>
                            @enderror
                        </div>
                        <div class="auth__input-inline">
                            <label for="password_confirmation" class="auth__input-label">Confirm password</label>
                            <input class="auth__input-field" type="password" id="password_confirmation"
                                   name="password_confirmation">
                            @error('password_confirmation')
                            <span class="auth__input-error">{{ $errors->first('password_confirmation') }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="auth__input-group">
                        <button type="submit" class="auth__btn">Update profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

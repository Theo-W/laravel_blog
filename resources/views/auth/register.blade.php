@extends('layouts.layout')

@section('content')
    <div>
        <div class="title is-1">Register</div>

        <div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="field">
                    <label for="name" class="label">{{ __('Name') }}</label>

                    <div class="control">
                        <input id="name" type="text" class="input"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <label for="email"
                           class="label">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="input"
                               name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <label for="password"
                           class="label">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                               class="input" name="password"
                               required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <label for="password-confirm"
                           class="label">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="input"
                               name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div>
                    <button type="submit" class="button is-primary mt-3">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

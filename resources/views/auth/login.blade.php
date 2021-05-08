@extends('layouts.layout')

@section('content')
    <div class="mt-5">
        <div class="title is-1">{{ __('Login') }}</div>

        <div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mt-3">
                    <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="input"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <label for="password" class="label">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password"
                               class="input" name="password" required
                               autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="mt-3">
                    <div>
                        <input class="checkbox" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="checkbox" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="submit" class="button is-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="button is-primary is-outlined" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection

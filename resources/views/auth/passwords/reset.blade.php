@extends('layouts.app')

@section('content')
    <div class="loginBody">

        <a href="/"><img src="{{url("/images/logo.svg")}}" alt="logo" class="logo"></a>

        <div class="container formField">

            <h2>{{ __('Reset Password') }}</h2>

            <form method="POST" action="{{ route('password.update') }}" class="formField">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <label for="email" class="invisibleLabel">{{ __('E-Mail Address') }}</label>

                <input placeholder="email" id="email" type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputField" name="email"
                       value="{{ $email ?? old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

                <label for="password" class="invisibleLabel">{{ __('Password') }}</label>

                <input id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} inputField"
                       name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

                <label for="password-confirm" class="invisibleLabel">{{ __('Confirm Password') }}</label>

                <input placeholder="Confirm password" id="password-confirm" type="password"
                       class="form-control inputField"
                       name="password_confirmation" required>

                <button type="submit" class="pictionaryButton">
                    {{ __('Reset Password') }}
                </button>

            </form>
        </div>
    </div>

@endsection

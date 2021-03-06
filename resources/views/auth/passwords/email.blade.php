@extends('layouts.app')

@section('content')
    <div class="loginBody">
        <a href="/"><img src="{{url("/images/logo.svg")}}" alt="logo" class="logo"></a>

        <div class="container formField">

            <h2>{{ __('Reset Password') }}</h2>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="formField">
                @csrf

                <label for="email" class="invisibleLabel">{{ __('E-Mail Address') }}</label>

                <input placeholder="email" id="email" type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputField"
                       name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

                <button type="submit" class="pictionaryButton">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>

        </div>
    </div>
@endsection

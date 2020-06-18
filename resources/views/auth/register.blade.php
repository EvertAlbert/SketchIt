@extends('layouts.app')

@section('content')
    <div class="loginBody">

        <a href="/"><img src="{{url("/images/logo.svg")}}" alt="logo" class="logo"></a>

        <section class="formField">
            <h2>Register</h2>


            <form method="POST" action="{{ route('register') }}" class="formField">
                @csrf

                <label for="name" class="invisibleLabel">{{ __('Name') }}</label>

                <input placeholder="Username" id="name" type="text"
                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} inputField" name="name"
                       value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif

                <label for="email" class="invisibleLabel">{{ __('E-Mail Address') }}</label>

                <input placeholder="email" id="email" type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputField"
                       name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

                <label for="password" class="invisibleLabel">{{ __('Password') }}</label>

                <input placeholder="password" id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} inputField"
                       name="password"
                       required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

                <label for="password-confirm" class="invisibleLabel">{{ __('Confirm Password') }}</label>

                <input placeholder="confirm password" id="password-confirm" type="password" class="inputField"
                       name="password_confirmation" required>
                <p class="info">Password needs to be at least 6 characters long</p>

                <button type="submit" class="pictionaryButton">
                    {{ __('Register') }}
                </button>
            </form>
        </section>
    </div>

@endsection

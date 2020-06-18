@extends('layouts.app')

@section('content')
    <div class="loginBody">

        <a href="/"><img src="{{url("/images/logo.svg")}}" alt="logo" class="logo"></a>

        <section class="formField">

            <h2>Login</h2>

            <form method="POST" action="{{ route('login') }}" class="formField">
                @csrf
                <label for="email" class="invisibleLabel">{{ __('E-Mail Address') }}</label>
                <input placeholder="email" id="email" type="email"
                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputField"
                       name="email" value="{{ old('email') }}" required autofocus>

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

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <section class="fombuttons">
                    <button type="submit" class="pictionaryButton">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="pictionaryButton" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </section>
            </form>
        </section>
    </div>

@endsection

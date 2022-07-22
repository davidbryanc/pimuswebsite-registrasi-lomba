@extends('layout.mainweb')

@section('title')
    PIMUS 11 - Login
@endsection

@section('content')
    <section id="login" class="mb-5" style="margin-top: 150px">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-12 col-12"></div>
                <div class="col-lg-4 col-md-12 col-12">
                    <img src="{{ url('/assets/images/logo/logo-pimus-text.png') }}" alt="PIMUS XI" class="mb-4">
                    <form method="POST" action="{{ route('login') }}" class="form-login-register">
                        @csrf
                        <div>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" placeholder="Email Gooaya"
                                name="email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror"
                                placeholder="Password" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @if (Route::has('password.request'))
                            <a class="forget" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <div class="clear"></div>
                        <button class="btnLogin">Login</button>
                        <p class="register">Don't have an account yet? <a href="{{ url('/register') }}"> Sign Up</a>
                        </p>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 col-12"></div>
            </div>
        </div>
    </section>
@endsection

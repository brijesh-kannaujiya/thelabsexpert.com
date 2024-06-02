@extends('web.common.app')
@section('content')
{{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}

<div class="page-title-area item-bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Login</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="login-area ptb-100">
    <div class="container">
        <div class="login-form">
            <div class="sign-in-title">
                <h3>Login</h3>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkme">
                            <label class="form-check-label" for="checkme">Keep Me Logged In</label>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        {{-- <p class="forgot-password"><a href="#">Forgot Password?</a></p> --}}
                    </div>

                    <div class="col-lg-12">
                        <div class="send-btn">
                            <button type="submit" class="default-btn">
                                Login Now
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<div class="newsletter-area pb-100">
    <div class="container">
        <div class="newsletter-inner">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="newsletter-content">
                        <h2>Subscribe To Our Newsletter</h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form class="newsletter-form">
                        <input type="email" class="input-newsletter" placeholder="Your Email" name="EMAIL" required autocomplete="off">

                        <button type="submit">
                            Subscribe Now
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

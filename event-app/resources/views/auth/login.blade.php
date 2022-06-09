{{--@extends('layouts.app')

@section('content')
<div class="container">
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
</div>
@endsection--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evanto - Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Admin, Dashboard, Bootstrap" />
    <link rel="shortcut icon" sizes="196x196" href="/auth/images/logo.png">

    <link rel="stylesheet" href="/auth/css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/auth/css/materialdesigniconicfont/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/auth/css/animate.css/animate.min.css">
    <link rel="stylesheet" href="/auth/css/bootstrap.css">
    <link rel="stylesheet" href="/auth/css/core.css">
    <link rel="stylesheet" href="/auth/css/misc-pages.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
    <style>
        .mybg {
            background-image: linear-gradient(to right, #ee8425 0%, #f9488b 100%), linear-gradient(to right, #ee8425 0%, #f9488b 100%);
        }
    </style>
</head>
<body class="simple-page mybg">
<div id="back-to-home">
    <a href="/" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
</div>
<div class="simple-page-wrap">
    <div class="simple-page-logo animated swing">
        <a href="/">
            <span><i class="fa fa-gg"></i></span>
            <span>Evanto</span>
        </a>
    </div><!-- logo -->
    <div class="simple-page-form animated flipInY" id="login-form">
        <h4 class="form-title m-b-xl text-center">Sign In With Your Evanto Account</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                {{--<input id="sign-in-email" type="email" class="form-control" placeholder="Email">--}}
                <input id="sign-in-email" type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                {{--<input id="sign-in-password" type="password" class="form-control" placeholder="Password">--}}
                <input id="password" type="password" placeholder="Password" class="form-control @error('password')  is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group m-b-xl">
                <div class="checkbox checkbox-primary">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    {{--<input type="checkbox" id="keep_me_logged_in"/>
                    <label for="keep_me_logged_in">Keep me signed in</label>--}}
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="SING IN">
        </form>
    </div><!-- #login-form -->

    <div class="simple-page-footer">
        <!-- <p><a href="password-forget.html">FORGOT YOUR PASSWORD ?</a></p> -->
        <p>
            <small>Don't have an account ?</small>
            <a href="/register">CREATE AN ACCOUNT</a>
        </p>
    </div><!-- .simple-page-footer -->


</div><!-- .simple-page-wrap -->
</body>
</html>



@extends('layouts.templates.app')

@section('pageTitle')
    Login
@stop

@section('pageDescription')
    Login page for our clients and partners of Raines Technologies Nigeria Limited
@stop

@section('content')
    @guest
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col m-5" data-toggle="auth" id="auth">
                        <!-- Login form -->
                        <div id="login">
                            <form class="form-login form-narrow" id="login-form" method="POST" action="{{ route('login') }}" data-parsley-validate="">
                                {!! csrf_field() !!}
                                <h3 class="title-divider">
                                    <span>Welcome, Login here...</span>
                                    <small class="mt-4" id="register-form-show">Not signed up? <a href="#register">Sign up here</a>.</small>
                                </h3>
                                <div class="bs-callout bs-callout-warning hidden">
                                    <h4>Ooooops!</h4>
                                    <p>Your inputs seems to be invalid :(</p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="username">Username or Email</label>
                                    <input type="text" name="username" id="username" class="form-control email" value="{{ old('email') }}" required autofocus placeholder="Username or Email">
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }} id="optionsCheckboxes2" value="1">
                                        Keep me Logged In
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                                |
                                <small id="reset-form-show"><a href="#email-reset">Forgotten Password?</a></small>
                            </form>
                        </div>

                        <div id="register">
                            <form class="form-register form-narrow" id="register-form" method="POST" action="{{ route('register') }}" data-parsley-validate="">
                                {!! csrf_field() !!}
                                <h3 class="title-divider">
                                    <span>Welcome, Register...</span>
                                    <small class="mt-4" id="login-form-show">Registered? <a href="#login">Login here</a>.</small>
                                </h3>
                                <div class="bs-callout bs-callout-warning hidden">
                                    <h4>Ooooops!</h4>
                                    <p>Your inputs seems to be invalid :(</p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="name">Username</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required autofocus placeholder="Username...">
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control email" value="{{ old('email') }}" required placeholder="Email...">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password">Password</label>
                                    <input type="password" name="password" id="password1" class="form-control password" placeholder="Password" required minlength="6">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="password_confirmation">Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control password" placeholder="Confirm Password" data-parsley-equalto="#password1" >
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>

                        <div id="email-reset">
                            <form class="form-email form-narrow" method="POST" action="{{ route('password.email') }}" data-parsley-validate="">
                                {!! csrf_field() !!}
                                <h3 class="title-divider">
                                    <span>Password Reset, Email Link...</span>
                                </h3>
                                <div class="bs-callout bs-callout-warning hidden">
                                    <h4>Ooooops!</h4>
                                    <p>Your inputs seems to be invalid :(</p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="reset-email-page">Email</label>
                                    <input type="text" name="email" id="reset-email-page" class="form-control email" value="{{ old('email') }}" required autofocus placeholder="Your Registered Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                                |
                                <small id="login-form-show1"><a href="#login">Login Here</a></small>
                            </form>
                        </div>

                        <div id="reset">
                            <form class="form-email form-narrow" method="POST" action="{{ route('password.request') }}" data-parsley-validate="">
                                {!! csrf_field() !!}
                                <input type="hidden" name="token" value="{{ $token or "" }}">
                                <h3 class="title-divider">
                                    <span>Welcome, Reset Password...</span>
                                </h3>
                                <div class="bs-callout bs-callout-warning hidden">
                                    <h4>Ooooops!</h4>
                                    <p>Your inputs seems to be invalid :(</p>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="reset-email-page">Email</label>
                                    <input type="email" name="email" class="form-control email" value="{{ old('email') }}" required autofocus placeholder="Your Registered Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="reset-email-page">New Password</label>
                                    <input type="password" name="password" class="form-control password" value="{{ old('password') }}" required autofocus placeholder="New Password here...">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="reset-email-page">Confirm Password</label>
                                    <input type="password" name="password" class="form-control password" value="{{ old('confirm_password') }}" required autofocus placeholder="Confirm Password here...">
                                    @if ($errors->has('confirm_password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Reset Password</button>
                                |
                                <small id="login-form-show1"><a href="#login">Login Here</a></small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col">
                    1 of 2
                </div>
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Account Info
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img class="card-img-top profile-pic" src="/assets/img/slides/slide1.png" alt="Card image cap">
                                <div class="card-block">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-block">
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <td>Username</td>
                                            <td>{{ auth()->user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ auth()->user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date Registered</td>
                                            <td>{{ auth()->user()->created_at->diffForHumans() }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest
    </div>
@stop

@push('pageScripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"
        integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i"
        crossorigin="anonymous">
</script>

    <script type="text/javascript">
        $(function() {
            var fieldN = fn_form_fields('#register-form');
            //var callback = fn_redirect('profile');
            var form = ajax_form("#register-form", fieldN, 'fn_redirect', 'profile');
        });
    </script>
@endpush
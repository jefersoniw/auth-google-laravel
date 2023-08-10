@extends('layout.lay_login')

@section('title', 'Login - GOOGLE')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-10 col-sm-8 m-auto login-form">

            <h2 class="text-center logo_h2">
                <img src="{{ asset('/clear_theme/img/login.png') }}" alt="Logo" width="50%">
            </h2>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="index.html" id="authentication" method="post" class="login_validator">
                            <div class="form-group">
                                <label for="email" class="sr-only"> E-mail</label>
                                <input type="text" class="form-control" id="email" name="username"
                                    placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group checkbox">
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember">&nbsp; Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sign In" class="btn btn-primary btn-block" />
                            </div>
                            <a href="forgot_password.html" id="forgot" class="forgot"> Forgot Password ? </a>

                            <span class="float-right sign-up">New ? <a href="register.html">Sign Up</a></span>
                        </form>
                    </div>
                </div>
                <div class="row text-center social">
                    <div class="col-12">
                        <p class="alter">Sign in with</p>
                    </div>
                    <div class="row m-auto">

                        <div class="col-4">
                            <a href="#" class="btn btn-lg btn-facebook">
                                <i class="ti-facebook"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="btn btn-lg btn-twitter">
                                <i class="ti-twitter-alt"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="btn btn-lg btn-google">
                                <i class="ti-google"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

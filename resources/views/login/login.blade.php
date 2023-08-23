@extends('layout.lay_login')

@section('title', 'Login')
@section('content')

    <div class="row">
        <div class="col-lg-4 col-10 col-sm-8 m-auto login-form">

            <h2 class="text-center logo_h2">
                <img src="{{ asset('/clear_theme/img/login.png') }}" alt="Logo" width="50%">
            </h2>

            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('login.store') }}" id="authentication" method="post" class="login_validator">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="sr-only"> E-mail</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Senha</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Senha">
                            </div>
                            <div class="form-group checkbox">
                                <label for="remember">
                                    <input type="checkbox" name="remember" id="remember">&nbsp; Lembrar
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Login" id="login"
                                    class="login btn btn-primary btn-block rounded" />
                            </div>
                            <a href="#" id="forgot" class="forgot"> Esqueceu sua senha? </a>

                            <span class="float-right sign-up">Novo? <a href="{{ route('login.register') }}">Faça um
                                    registro</a></span>
                        </form>
                    </div>
                </div>
                <div class="row text-center social">
                    <div class="col-12">
                        <p class="alter">Entre também com:</p>
                    </div>
                    <div class="row m-auto">
                        <div class="col-md-12">
                            <a href="{{ $authUrl }}">
                                <img src="{{ asset('clear_theme/img/google.png') }}" alt="Google" width="20%">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

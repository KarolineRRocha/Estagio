@extends('layouts.app_no_components')

@section('content')
    <div class="backgroundLogin">
        <div class="container" id="loginForm">
            <div class="col-lg-5 col-md-8 login-box">
                <div class="col-lg-12 login-title">
                    Bem vind@!
                </div>

                <div class="col-lg-12 login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ old('email') }}" required autofocus placeholder="email@email.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Senha</label>
                            <input type="password" name="password" id="password" class="form-control" required
                                placeholder="Sua senha">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-12 login-btm login-button">
                                <button type="submit" class="btn btnForm">LOGIN</button>
                            </div>
                        </div>

                        <div class="col-lg-12 login-info">
                            <span>ou use uma destas opções:</span>
                        </div>

                        <div class="col-lg-12 login-options">
                            <div class="col-lg-6">
                                <img class="icons" src="{{ asset('images/facebookIcon.png') }}" alt="facebookIcon">
                                <span class="spanIcons">Facebook</span>
                            </div>
                            <div class="col-lg-6">
                                <img class="icons" src="{{ asset('images/googleIcon.png') }}" alt="facebookIcon">
                                <span class="spanIcons">Google</span>
                            </div>
                        </div>

                        <div class="col-lg-12 register_text">
                            <span>Não tem conta?</span>
                            <a href="{{ route('register') }}"><span id="spanRegister">Registre-se!</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

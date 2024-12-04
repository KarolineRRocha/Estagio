@extends('layouts.app_no_components')

@section('content')
    <div class="backgroundRegister">
        <div class="container" id="registerForm">
            <div class="row register">
                <div class="col-lg-5 col-md-8 login-box">
                    <div class="col-lg-12 login-back">
                        <a href="{{ route('login') }}" id="ancoraText">Voltar</a>
                    </div>
                    <div class="col-lg-12 login-title">
                        Registre-se!
                    </div>

                    <div class="col-lg-12 register-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Nome</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autofocus placeholder="Seu nome">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autofocus placeholder="email@email.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Senha</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    placeholder="Sua senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Confirme a senha</label>
                                <input id="password_confirmation" type="password" class="form-control"
                                    name="password_confirmation" required placeholder="Confirme a senha">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-12 login-btm login-button">
                                    <button type="submit" class="btn btnForm">CRIAR CONTA</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

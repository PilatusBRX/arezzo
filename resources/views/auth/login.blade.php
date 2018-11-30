@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-8 justify-content-center login-panel">
            <div class="card-title text-center mb-4"><i class="fas fa-mail-bulk"></i></div>
            <div class="card ">

                <div class="card-header"><h4 class="mb-4 mt-4 text-center">Seja bem-vindo(a) ao Arezzo Contatos</h4></div>

                <div class="card-body">

                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12" class="email-field">
                                <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Senha">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="form-check row checkbox-form ">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Lembrar-me') }}
                                </label>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu-se da senha ?') }}
                                </a>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit " class="btn btn-primary btn-login">
                                    {{ __('Entrar') }}
                                </button>

                            </div>
                        </div>
                        <br>
                        <p>Ainda não tem uma conta? Cadastre-se agora mesmo</p>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <a href="/register"  class="btn btn-primary btn-login">
                                    Cadastrar-se
                                </a>

                            </div>
                        </div>
                </div>
             </div>

        </div>
    </div>
</div>
@endsection

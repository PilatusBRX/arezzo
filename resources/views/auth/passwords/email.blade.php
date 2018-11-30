@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 justify-content-center login-panel">
            <div class="card">
                <div class="card-header"><h4 class="mb-4 mt-4 text-center">Redefinir senha</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Redefinir senha') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-login">
                                    {{ __('Enviar link da redefinição de senha') }}
                                </button>
                            </div>
                        </div>

                        <p class="text-center" style="color:#f2f2f2;";>ou</p>
                        <div class="form-group">
                            <div class="col-md-12">
                                <a href="/login" class="btn btn-primary btn-login">
                                    {{ __('Entrar') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

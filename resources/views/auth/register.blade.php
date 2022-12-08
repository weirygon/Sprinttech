@extends('layout.head')

@section('titulo', 'Register')

@section('scripts')
   
    <link rel="stylesheet" type="text/css" href="/css/login.css">

@endsection

@section('conteudo')

<div class="card-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

            <div class="col-md-6">
                <input id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="cro" class="col-md-4 col-form-label text-md-right">CRO</label>

            <div class="col-md-6">
                <input id="cro" type="cro"
                    class="form-control @error('cro') is-invalid @enderror" name="cro"
                    value="{{ old('cro') }}" required autocomplete="cro">

                @error('cro')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

            <div class="col-md-6">
                <input id="password" type="password"
                    class="form-control @error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirme
                a senha</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Registrar-se
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
@extends('layout')
@section('cabecalho')
@endsection
@section('conteudo')
    @include('erros', ['errors' => $errors])
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="email" style="color: #1d643b"><b>E-mail</b></label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password" style="color: #1d643b"><b>Senha</b></label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success" style="background-color: #1d643b">
            Entrar
        </button>

        <button type="submit" class="btn btn-success" style="background-color: #1d643b" a href="/registrar">
            Registrar-se
        </button>
    </form>
@endsection
@section('rodape')
@endsection


<!doctype html>
<html lang="pt-BR">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<script src="https://kit.fontawesome.com/2dd7d2adb3.js" crossorigin="anonymous"></script>


<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<script src="{{ asset('js/app.js') }}" defer></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LaSysDiversité</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
<div class="container">
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg- border-bottom shadow-sm">
        <h1>@yield('cabecalho')</h1>
        <h5 class="my-0 mr-md-auto font-weight-normal" style="color: #1d643b"><b>La Diversité</b></h5>
        <nav class="my-2 my-md-0 mr-md-3">

        </nav>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->

            @guest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/entrar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>

        @endguest

    </div>
</div>


<div class="container">
    <div class="row">
<div class="p-5 mb-4 bg-light rounded-3">
    <a href="/contas"> <i class="fas fa-backward" style="color: #1d643b; width: 10px"></i> <h6 style="color: #1d643b">Voltar</h6></a>
    <div class="container-fluid py-5" style="">
        <h1 class="display-5 fw-bold" style="color: #1d643b">Contas</h1>
        <p class="col-md-8 fs-4" ><h4>Insira os dados abaixo para adicionar uma nova conta: </h4></p>
    </div>
</div>
    </div>
</div>

<div class="container">
    <div class="row">


        <div class="col-sm">
            <div class="form-group">
                <label for="dataVenc" style="color: #1d643b"><b>Data de vencimento*</b></label>
                <input type="date" name="dataVenc" id="dataVenc" required class="form-control">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="dataPgto" style="color: #1d643b"><b>Data de pagamento</b></label>
                <input type="date" name="dataPgto" id="dataPgto" class="form-control">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="descricao" style="color: #1d643b"><b>Descrição*</b></label>
                <input type="text" name="descricao" id="descricao" required class="form-control">
            </div>
        </div>
        <div class="col-sm">
            <div class="form-group">
                <label for="valor" style="color: #1d643b"><b>Valor*</b></label>
                <input type="number" name="valor" id="valor" required class="form-control">
            </div>
        </div>


    </div>
</div>

<div class="container">

       <a href=""> <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2" style=" background-color: #1d643b; text-align: center">Adicionar conta</button></a>

</div>







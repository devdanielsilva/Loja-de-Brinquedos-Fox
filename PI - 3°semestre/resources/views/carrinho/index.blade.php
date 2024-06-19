<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /*Header*/
        .bold {
            font-weight: bold;
        }

        #header {
            background-color: #eeeeee;
            padding: 10px;
            margin-right: 0;
            margin-left: 0;
        }

        .navbar-itens {
            padding-left: 20px;
            padding-right: 20px;
        }

        .login-cadastro,
        a:hover {
            color: aqua;
        }

        .centralize {
            align-items: center;
            text-align: center;
            justify-content: center;
            width: 100%;
        }

        .menu-itens {
            box-sizing: border-box;
        }

        #searchbar {
            width: 140%;
        }

        .header-text {
            font-size: 19px;
        }

        .dropdown {
            list-style-type: none;
        }

        .float-left {
            color: #ff711e;
            float: left;
            width: 23px;
            height: 23px;
            margin-left: 15%;
            margin-right: 3%;
            margin-top: 13px;
        }

        .col {
            margin-right: 6%;
        }

        .row-width {
            width: 100%;

            align-items: center;
            text-align: center;
            justify-content: center;
        }

        #cart {
            color: #ff711e;
            width: 45px;
            height: auto;
            padding: 5px;
            background-color: #e0e0e0;
            border: 2px solid #cccccc;
            border-radius: 25%;
        }

        /*Botão ir ás compras*/
        .btn btn-primary btn-lg {
            padding: 500px 115px;
            line-height: 38px;
            border-radius: 3px;
            font-weight: 500;
            font-size: 15px;
            text-shadow: none;
            border: none;
        }

        /*Botão ir ás compras*/
        button.btn.btn-primary.btn-lg {
            background: orange;
            color: #ffffff;
        }

        /*Hover do Botão ir ás compras*/
        button.btn.btn-primary.btn-lg:hover {
            background: #43adda;
            color: #ffffff;
        }


        .jesus {
            text-align: center;
            padding: 90px;
            border-radius: 3px;

        }


        h1 {
            text-align: center;
            align-items: center;
            padding: 40px;
        }


        .info-destaque {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(107, 107, 107);
        }

        .info-texto {
            margin: 5px;
            color: white;
        }

        #cabecalho {
            background-color: whitesmoke;
        }

        /*Navbar de destaque: Parcelamento, frete etc.*/
        #navbarNav {
            height: 100px;
        }

        .h2,
        h2 {
            margin: 20px;
        }

        .nav-item {
            text-align: center;
        }

        nav ul {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 70%;
            height: 40px;
            margin: 0px 0px 0px 250px;
        }

        li {
            flex-grow: 1;
        }

        /*Configuração de todos os Cards*/
        .card {
            border-radius: 10px;
            margin: 20px;
            width: 300px;
            /* Defina a largura desejada para os cards */
            height: 740px;
            /* Defina a altura desejada para os cards */
            background-color: rgba(245, 245, 245, 0.445);
        }

        .card-img-top {
            width: 180px;
            height: 180px;
            /* Defina a altura desejada para a imagem */
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 6px 58px;
        }

        .row-fluid,
        .titulo-categoria,
        .h2 {
            text-align: center;
        }

        .list-grouplist-group-flush {
            text-align: center;
        }

        button {
            width: 160px;
            height: auto;
            border-radius: 10px;
            background-color: #ff711e;
            color: white;
        }

        button,
        a {
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 9px;
        }

        button:hover {
            background-color: #43adda;
        }

        .destaque {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /*Footer*/
        footer {
            background-color: whitesmoke;
            color: #131111;
            margin-top: 10px;
            border-radius: 10px;
        }

        .footer-home {
            width: 100%;
            height: 180px;
            text-align: center;
        }

        /*Informações do footer*/
        .footer-info {
            list-style-type: none;
            text-align: center;
        }

        /*Direitos Autorais*/
        .direitos-autor {
            padding-top: 10px;
            padding-bottom: 20px;
        }

        /*Responsividade da tela home.*/
        @media screen and(max-width: 1169px) {}
    </style>
</head>

<body>
    <header>
        <!--Topo do site-->
        <div class="row row-width" id="header">
            <div class="col feature-box">
                <a href="../home/">
                    <svg width="56" height="60" viewBox="0 0 822 866" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="822" height="866" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_51_1295" transform="scale(0.00199203 0.00189082)" />
                            </pattern>
                            <image id="image0_51_1295" width="502" height="529" xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>

                </a>
            </div>
            <!--Campo de busca e botão.-->
            <div class="col feature-box">
                <form class="d-flex" role="search" id="searchbar">
                    <input class="form-control me-2" type="search" placeholder="Pesquise aqui" aria-label="Search">
                    <button class="btn-group" type="submit">Buscar</button>
            </div>
            <div class="col feature-box">
                <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                </svg>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="header-text">Central de <span class="bold">Atendimento</span></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Estamos no whatsapp! 11 9999999</a></li>
                        <li><a class="dropdown-item" href="#">Email: lojafox@gmail.com</a></li>
                        <li><a class="dropdown-item" href="#">Horário de atendimento: Seg a Sex de 09h às 17h</a></li>
                    </ul>
                </li>
            </div>
            <div class="col feature-box">
                <svg class="float-left" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="../register" class="login-cadastro">
                        <span class="header-text"><span class="bold">Entrar</span> ou <span
                                class="bold">Cadastrar</span></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Minha Conta</a></li>
                        <li><a class="dropdown-item" href="#">Meus Pedidos</a></li>
                        <li><a class="dropdown-item" href="#">Lista de Desejos</a></li>
                    </ul>
                </li>
            </div>
            <div class="col feature-box">
                <a href="../carrinho">
                    <svg id="cart" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                </a>
            </div>
        </div>
    </header>
    <main>


        <h1>Não existe produto no carrinho</h1>

        <div class="jesus">
            <a href="../home"><button type="button" class="btn btn-primary btn-lg" #btn>Ir às compras</button></a>
        </div>


        <div class="col-md-12 buttom-area">
            <div class="text-center button-disciplina button-border">
                <h2 class="h2" id="mais-vendidos"><strong>Os Mais Vendidos</strong></h2>
            </div>
        </div>


        @extends('layouts.app')

        @section('content')
        <div class="container">
            <div class="row">
                @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <div class="row">
                    @foreach ($produtos as $produto)
                    <div class="col-md-3">
                        <div class="card">
                            @if ($produto->Produto_imagem->isNotEmpty())
                            <img src="{{ $produto->Produto_imagem->first()->IMAGEM_URL }}" class="card-img-top" alt="{{ $produto->PRODUTO_NOME }}">
                            @else
                            <img src="caminho/para/imagem_padrao.jpg" class="card-img-top" alt="Imagem padrão">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $produto->PRODUTO_NOME }}</h5>
                                <h5 class="card-title">{{ $produto->PRODUTO_ID }}</h5>
                                <p class="card-text" data-toggle="tooltip" title="{{ $produto->PRODUTO_DESC }}">
                                    {{ strlen($produto->PRODUTO_DESC) > 100 ? substr($produto->PRODUTO_DESC, 0, 100) . '...' : $produto->PRODUTO_DESC }}
                                </p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><strong>R$
                                            {{ number_format($produto->PRODUTO_PRECO, 2, ',', '.') }}</strong></li>
                                    <li class="list-group-item">R$
                                        {{ number_format($produto->PRODUTO_DESCONTO, 2, ',', '.') }} Descontos
                                    </li>
                                    <li class="list-group-item">Até 4x de R$
                                        {{ number_format($produto->PRODUTO_PRECO/4, 2, ',', '.') }}
                                    </li>
                                </ul>
                                <a href="{{ route('lista.show', $produto->PRODUTO_ID) }}" class="btn btn-primary">Ver
                                    Detalhes</a>
                                <form method="POST" action="{{ route('carrinho.adicionar') }}">
                                    @csrf
                                    <input type="hidden" name="produto_id" value="{{ $produto->PRODUTO_ID }}">
                                    <button type="submit" class="btn btn-primary d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus me-2" viewBox="0 0 16 16">
                                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z" />
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                        </svg>
                                        Adicionar ao Carrinho
                                    </button>
                                </form>
                                @if ($produto->Produto_estoque)
                                <p>Estoque: {{ $produto->Produto_estoque->PRODUTO_QTD }}</p>
                                @else
                                <p>Estoque não disponível</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endsection


        </div>
        </div>
        </div>
        <!--Whatsapp fixado, botão.-->
        <a href="https://wa.me/+" class="whatsapp-button" target="_blank" style="position: fixed; right: 15px; bottom: 15px; z-index: 15"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="56" height="63" viewBox="0 0 48 48">
                <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z">
                </path>
                <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z">
                </path>
                <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z">
                </path>
                <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z">
                </path>
                <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
            </svg></a>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
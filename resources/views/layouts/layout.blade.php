<html lang="{{ config('app.locale') }}">
<head>

    <title>TS Consultoria - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta author="Pedro Rago">

    <link rel="icon" href="/img/logo_dark.png">

    <base href="{{env('APP_URL')}}">

    <meta property="og:type" content="website">

    <meta charset="utf-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel='stylesheet' type='text/css' href='/css/site/app.css' />
    @yield('styles')
</head>

<body id='body'>
    <main>
        <header class="@yield('headerInterno')">
           <nav>
                <a href="/" class='logotipo' title="TS - Consultoria Logotipo" alt="TS - Consultoria Ínicio">
                    <img src="<?php echo asset('configuracoes/'.$configuracoes->logotipo_1); ?>">
                </a>

                <ul class="navbar">
                    <li><a href="/" class='homePageLink' title="Home" alt="Home">Home</a></li>
                    <li><a href="/servicos" class='servicosLink' title="Serviços" alt="Serviços">Serviços</a></li>
                    <li><a href="{{ route('about') }}" title="A Empresa" alt="A Empresa">A Empresa</a></li>
                    @if($casesCount)
                    <li><a href="/cases" title="Cases" alt="Cases">Cases</a></li>
                    @endif
                    <li><a href="/contato" title="Contato" alt="Contato">Contato</a></li>
                    <li><a href="{{ route('vagas.index') }}" title="Vagas" alt="Vagas">Vagas</a></li>
                </ul>

                <div class='menu-mobile'>
                    <button type='button' class='burguer-menu'>
                        <img src="/img/site/Burger.png" alt="">
                    </button>
                    <button type='button' class='close-menu'>
                        <img src="/img/site/close.png" alt="">
                    </button>
                </div>
           </nav>
        </header>
        @yield('content')
        <footer>
            <div class='container'>
                <div class='footer-header'>
                    <a href=""><img src="<?php echo asset('configuracoes/'.$configuracoes->logotipo_1); ?>"></a>
                    <div class='footer-infos'>
                        <h4>Contato</h4>
                        <p>{{ $configuracoes->email_contato }}</p>
                        <p>{{ $configuracoes->telefone_contato }}</p>
                        <p>{{ $configuracoes->endereco }}</p>
                    </div>
                </div>
                <div class='footer-menu'>
                    <nav>
                        <li><a href="/">Home</a></li>
                        <li><a href="/servicos">Serviços</a></li>
                        <li><a href="{{ route('about') }}">A Empresa</a></li>
                        <li><a href="/cases">Cases</a></li>
                        <li><a href="/contato">Contato</a></li>
                        <li><a href="{{ route('vagas.index') }}">Vagas</a></li>
                    </nav>
                    <ul>
                        @if($configuracoes->facebook)
                        <li><a href="{{ $configuracoes->facebook }}" title='Facebook' target="_blank"><img src="/img/site/facebook.png" alt=""></a></li>
                        @endif
                        @if($configuracoes->linkedin)
                        <li><a href="{{ $configuracoes->linkedin }}" title='Linkedin' target="_blank"><img src="/img/site/linkedin.png" alt=""></a></li>
                        @endif
                        @if($configuracoes->whatsapp_geral)
                        <li><a href="{{ $configuracoes->whatsapp_geral }}" target="_blank" class='whatsapp-link' title='Whatsapp Geral'><img src="/img/site/whatsapp.png" alt=""></a></li>
                        @endif
                        @if($configuracoes->whatsapp_especialista)
                        <li><a href="{{ $configuracoes->whatsapp_especialista }}" target="_blank" class='whatsapp-link' title='Whatsapp Especialista'><img src="/img/site/whatsapp_espc.png" alt=""></a></li>
                        @endif
                        @if($configuracoes->instagram)
                        <li><a href="{{ $configuracoes->instagram }}" title='Instagram' target="_blank"><img src="/img/site/instagram.png" alt=""></a></li>
                        @endif
                    </ul>
                </div>
                <div class='footer-finish'>
                    <p>2018 Copyright © TS Consultoria - Todos os Direitos Reservados.</p>
                    <h5>Feito por <strong>@agfênixmkt</strong></h5>
                </div>
            </div>
        </footer>
    </main>
    @if(!$policies)
    <form id='privacy-policies'>
        @csrf
        <div>
            <h2>Políticas de Privacidade</h2>
            <legend>Ao fechar esse banner, você concorda com as nossas políticas de privacidade (LGPD).  Clique aqui e <a href="/politicas-privacidade">saiba mais</a></legend>
        </div>
        <input id="name_route_accept_policies" type="hidden" value="{{ route('accept_policies') }}">
        <button type='button' id='accept-policies'>Concordo com as Políticas de Privacidade</button>
    </form>
    @endif

    <script src="{{ asset('js/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/site/app.js') }}"></script>
    @yield('scripts')
</body>
</html>

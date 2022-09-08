<html lang="{{ config('app.locale') }}">
<head>

    <title>Admin TS Consultoria - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta author="Pedro Rago">

    <link rel="icon" href="/img/logo_dark.png">

    <base href="{{env('APP_URL')}}">

    <meta property="og:type" content="website">

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/plugins/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/richtext.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin/app1.css')}}">
    @yield('styles')
</head>

<body id='body-admin'>

<main>
    <header>
        <div>
            <span style='text-trasnform: uppercase'><?php echo substr(Auth::user()->name, 0, 1); ?></span>
            {{Auth::user()->name}}
        </div>
    </header>
    <nav>
        <a href="/admin/vagas" class='logotipo' title="TS - Consultoria Logotipo" alt="TS - Consultoria Ínicio">
            <img src="{{ asset('configuracoes/'.$configuracoes->logotipo_1) }}">
        </a>
        <ul class="navbar">
            <li class="link-vagas">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <a href="{{ route('admin.vagas') }}" title="Vagas" alt="Vagas">Vagas</a>
            </li>
            <li class="link-candidaturas">
                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                <a href="/admin/candidaturas" title="Candidaturas" alt="Candidaturas">Candidaturas</a>
            </li>
            <li class="link-categorias">
                <i class="fa fa-folder-open" aria-hidden="true"></i>
                <a href="/admin/categorias" title="Categorias" alt="Categorias">Categorias</a>
            </li>
            <li class="link-empresas">
                <i class="fa fa-building" aria-hidden="true"></i>
                <a href="/admin/empresas" title="Empresas" alt="Empresas">Empresas</a>
            </li>
            <li class="link-galeria">
                <i class="fa fa-picture-o" aria-hidden="true"></i>
                <a href="/admin/galeria" title="Galeria" alt="Galeria">Galeria</a>
            </li>
            <li class="link-cases">
                <i class="fa fa-coffee" aria-hidden="true"></i>
                <a href="/admin/cases" title="Cases" alt="Cases">Cases</a>
            </li>
            <li class="link-clientes">
                <i class="fa fa-users" aria-hidden="true"></i>
                <a href="/admin/clientes" title="clintes" alt="clintes">Clientes</a>
            </li>
            <li class="link-profissionais">
                <i class="fa fa-user" aria-hidden="true"></i>
                <a href="{{ route('admin.professionals.index') }}" title="clintes" alt="clintes">Profissionais</a>
            </li>
            <li class="link-configuracoes">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <a href="/admin/configuracoes" title="Configurações" alt="Configurações">Configurações</a>
            </li>
            <li class='logout-li'>
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <a href="{{ route('logout') }}" title="Sair" alt="Sair" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    @yield('content')
    <footer>
        <p>Copyright (c) 2022 Agência Fenix MKT All Rights Reserved</p>
    </footer>
</main>

<script src="{{ asset('js/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('js/plugins/jquery.richtext.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/plugins/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/admin/alerts.js') }}"></script>
<script src="{{ asset('js/admin/app.js') }}"></script>
@yield('scripts')
</body>
</html>

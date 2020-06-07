<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Description" content="endi.kz - разработка профессиональных веб сайтов в Казахстане, Астане, Нурсултане,
    Продвижение и оптимизация, разработка мобильных приложении в Казахстане">
    <meta name="keywords" content="разработать сайт в Астане, создание сайта в Нур-Султане">
    <meta name="yandex-verification" content="14c0748634716d40" />
    <title>{{ config('app.name', 'Endi') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid navbar-flex">
            <a class="navbar-logo" href="{{ url('/') }}">
                <img src="/img/endi-logo.svg" alt="Endi Studio logo">
            </a>

            <div class="navbar-menu">
                <ul class="navbar-nav menu">
                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('main', [], false))}}"
                           href="{{ route('main') }}">{{ __('Main') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('projects', [], false))}}"
                           href="{{ route('projects') }}">{{ __('Projects') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('about', [], false))}}"
                           href="{{ route('about') }}">{{ __('About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('contacts', [], false))}}"
                           href="{{ route('contacts') }}">{{ __('Contacts') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="content container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-warning"><span class="glyphicon glyphicon-error"></span><em> {!! session('error') !!}</em></div>
        @endif
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container-fluid footer-flex">

            <div class="any-questions">
                <h1>Связаться с нами</h1>
                <p>Напишите нам и мы вам перезвоним</p>
                <form action="{{route('callback')}}" class="callback-form" method="POST">
                    @csrf
                    <div class="d-flex">
                        <div class="form-group m-md-1">
                            <input required class="form-control" type="text" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="form-group m-md-1">
                            <input required class="form-control" type="text" name="phone" placeholder="Телефон">
                        </div>
                    </div>
                    <div class="form-group m-md-1">
                        <textarea required class="form-control" name="message" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="btn btn-dark m-md-1">Отправить</button>
                </form>
            </div>


            <div class="footer-contact">
                <h1>Контактная информация:</h1>
                <p> 010000 г. Нурсултан, ул. Брусиловского д 5</p>
                <p>Пишите: <a href="mailto:info@endi.kz">info@endi.kz</a></p>
                <p>Звоните: <a href="callto:+77056543564">+7 705 654 35 64</a></p>
            </div>


            <div class="footer-menu">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('main', [], false))}}"
                           href="{{ route('main') }}">{{ __('Main') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('projects', [], false))}}"
                           href="{{ route('projects') }}">{{ __('Projects') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('about', [], false))}}"
                           href="{{ route('about') }}">{{ __('About') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('contacts', [], false))}}"
                           href="{{ route('contacts') }}">{{ __('Contacts') }}</a>
                    </li>
                </ul>
            </div>



        </div>
    </footer>
</div>
</body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Description" content="endi.kz - разработка профессиональных веб сайтов в Казахстане, Астане, Нурсултане,
    Продвижение и оптимизация, Разработка мобильных приложении в Казахстане">
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
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
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
            <div class="container navbar-flex">
                <a class="navbar-logo" href="{{ url('/') }}">
                    <img src="/img/endi-logo.svg" alt="Endi Studio logo">
                </a>

                <div class="navbar-menu">
                    <ul class="navbar-nav menu">
                        <li class="nav-item">
                            <a class="nav-link {{active_uri(route('projects', [], false))}}"
                               href="{{ route('projects') }}">{{ __('Projects') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_uri(route('about', [], false))}}"
                               href="{{ route('about') }}">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{active_uri(route('advantages', [], false))}}"
                               href="{{ route('advantages') }}">{{ __('Advantages') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{active_uri(route('contacts', [], false))}}"
                               href="{{ route('contacts') }}">{{ __('Contacts') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="content">
            @yield('content')
        </main>
        <footer class="footer">
            <div class="container footer-flex">
                <div class="endi-brand">
                    <img src="/img/endi-logo.svg" alt="Endi Studio logo">
                </div>
                <div class="footer-menu">
                    <ul>
                        <li>
                            <a href="">Главная</a>
                        </li>
                        <li>
                            <a href="">Услуги</a>
                        </li>
                        <li>
                            <a href="">О нас</a>
                        </li>
                        <li>
                            <a href="">Преимущества</a>
                        </li>
                        <li>
                            <a href="">Проекты</a>
                        </li>
                        <li>
                            <a href="">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <p> г. Нур-Султан, ул. Брусиловского, 5</p>
                    <p>info@endi.kz</p>
                    <p>+7 705 654 35 64</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>

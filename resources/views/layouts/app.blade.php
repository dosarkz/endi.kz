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
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Projects') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Advantages') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Contacts') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

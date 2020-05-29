<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Description" content="endi.kz - разработка профессиональных веб сайтов в Казахстане, Астане, Нур-султане,
    Продвижение и оптимизация, Разработка мобильных приложении в Казахстане">
    <meta name="keywords" content="разработать сайт в Астане, создание сайта в Нур-Султане">
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
    <main class="content container-fluid">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container-fluid footer-flex">

            <div class="any-questions">
                <h5>Связаться с нами</h5>
                <p>Напишите нам и мы вам перезвоним</p>
                <form action="{{route('callback')}}" class="callback-form" method="POST">
                    @csrf
                    <div class="d-flex">
                        <div class="form-groupm m-md-1">
                            <input class="form-control" type="text" name="name" placeholder="Ваше имя">
                        </div>
                       <div class="form-group m-md-1">
                           <input class="form-control" type="text" name="phone" placeholder="Телефон">
                       </div>
                    </div>
                    <div class="form-group m-md-1">
                        <textarea class="form-control" name="phone" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="btn btn-dark m-md-1">Отправить</button>
                </form>
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
                        <a class="nav-link {{active_uri(route('advantages', [], false))}}"
                           href="{{ route('advantages') }}">{{ __('Advantages') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{active_uri(route('contacts', [], false))}}"
                           href="{{ route('contacts') }}">{{ __('Contacts') }}</a>
                    </li>
                </ul>
            </div>
            <div class="footer-contact">
                <p> 5 ул Бруссиловского, г. Астана</p>
                <p>info@endi.kz</p>
                <p>+7 705 654 35 64</p>
            </div>

            <div class="endi-brand">
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="endi-logo" fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 25C0 11.1929 11.1929 0 25 0C38.8071 0 50 11.1929 50 25C50 38.8071 38.8071 50 25 50C11.1929 50 0 38.8071 0 25ZM17.7851 33.9893H23.6277V30.5318L26.8299 33.9893H33.2342L17.7851 15.1361V33.9893ZM27.7287 15.1361H33.2342V22.7687L27.7287 15.1361Z"
                          fill=""/>
                </svg>
            </div>
        </div>
    </footer>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <header>
        <section>
            @yield('headerLeft')
        </section>
        <section>
            <h1>@yield('headline')</h1>
        </section>
        <section>
            @yield('headerRight')
        </section>
    </header>


        @yield('content')


    <nav class="bottomNav">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-folder" aria-hidden="true"></i>
                    <p>Catalogue</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <p>Profile</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <p>Grundfos</p>
                </a>
            </li>
        </ul>
    </nav>

</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

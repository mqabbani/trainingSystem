<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Training System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    body {
        background-image: url("{{ asset('images/login.jpg') }}")
    }
    #app{
        background-image: url("{{ asset('images/login.jpg') }}")
    }
</style>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style='background-image: url("{{ asset('images/login.jpg') }}")'>
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}" style="color: white">
                Training System
            </a>
            
            
           <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav mr-auto">

                </ul>

               
                <ul class="navbar-nav ml-auto">
                 

                </ul>
            </div>-->
        </div>
    </nav>

    <main class="py-10">
        @yield('content')
    </main>
</div>
</body>
</html>

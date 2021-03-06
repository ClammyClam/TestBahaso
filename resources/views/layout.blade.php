<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
  
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">

            <div class="container">
                <a class="navbar-brand" id='title' href="/">
                    ArticleWeb
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}"> 
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ Request::path() === 'articles' ? 'active' : '' }} ">
                        <a class="nav-link" href="/articles">Article</a>
                    </li>
                </ul>
            </div>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>      
    </div>
    
</body>
</html>

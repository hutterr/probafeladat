<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Próbafeladt')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
      
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">{{config('app.name','Feki Webstúdió Próbafeladat')}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Kezdőlap </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projekt">Projektek </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projekt/create">Új projekt</a>
                </li>
                </ul>
            </div>
        </nav>
        @include('message')
        @yield('content')
    </body>
</html>

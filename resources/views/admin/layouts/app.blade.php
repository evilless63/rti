<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Департамент Аукционных Продаж - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <!-- common styles -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        li {
        font-size: 0.95rem;
        line-height: 1.7rem;
        }
    </style>

    <script src="https://maps.api.2gis.ru/2.0/loader.js"></script>

    <script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
        <div class="alert alert-{{ $msg }} col-md-12 alert-dismissible fade show" style="" role="alert">
        {{ Session::get('alert-' . $msg) }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
      @endif
    @endforeach
    @if (session()->has('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
    @endif

    <nav class="navbar navbar-toggleable-sm navbar-light bg-default">
        <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            На главную
        </a>
        <a href="{{ route('product.index') }}">Продукция</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar1">
            <ul class="navbar-nav">

            @guest

            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Выход
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
            
            </ul>
        </div>
        </div>
    </nav>


    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>
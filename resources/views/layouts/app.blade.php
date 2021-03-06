<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- custom css --}}
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" >

        {{-- bootstrap boilaplate --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}" >
        <link rel="shortcut icon" href="{{{ asset('imgs/Icarus.ico') }}}">
        <link rel="stylesheet" href="{{{ asset('css/animate.min.css') }}}">
        <title>{{config('app.name', 'Nice')}}: @yield('customized')</title>
        {{-- <link rel="stylesheet" href="{{asset('css/semantic.min.css')}}" > --}}

    </head>
    <body>
        {{-- <div id="mobile"></div> --}}
        @include('inc.navbar')
        @yield('main-nav')
        <div class="container">
            @yield('content')
        </div>
        <div id="images">
            @yield('image')
            <p class="text-center"><span id="end-line"></span></p>
        </div>
        <div class="text-center scrolling-wrapper">
            @yield('clients')
        </div>
        <br>
        {{-- <hr> --}}
        <div id="afterimg" class="text-center afterimg container">
            @yield('afterimg')
        </div>
        <div id="why-main">
            @yield('why-orange')
        </div>
        <div id="portfoo" class="text-right">
            @yield('portfoo')
        </div>
        <div class="container text-left">
                @yield('blogs')
        </div>
        <div id="drupal">
            @yield('contact')
        </div>
        <p id="footer" class="text-center">Copyright &copy; 2018 Terms and coditions</p>

    </body>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
</html>

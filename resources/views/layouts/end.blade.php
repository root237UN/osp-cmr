<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Junge&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aleo&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">

    <link href="{{ asset('css/navbar/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/filiere.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">

    <link href="{{ asset('css/cover.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orientation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar/end.scss') }}" rel="stylesheet">

    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top-navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top-content.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive-mobile.css') }}" rel="stylesheet">

    <!-- AOS Animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="{{asset('js/libs/toastr/toastr.min.css')}}" rel="stylesheet" />


    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @livewireStyles
    @yield('css')
</head>

<body>
    <div id="app">
        <header>
            @include('partials.navbar-orientation')
        </header>
        <main class="flex-shrink-0">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    @stack('scripts')
    @include('partials.footer')
    @stack('script-carte')

    <script src="{{asset('js/libs/jquery/jquery.js')}}"> </script>
    <script src="{{asset('js/libs/toastr/toastr.min.js')}}"> </script>

    <script>
      window.addEventListener('showToastr',function (event) {
        toastr.remove();
        if(event.detail.type==='info'){
          toastr.info(event.detail.message);
        }
        else if(event.detail.type==='success'){
          toastr.success(event.detail.success);
        }
        else if(event.detail.type==='error'){
          toastr.error(event.detail.message)
        }
        else if(event.detail.type==='warning'){
          toastr.warning(event.detail.message)
        }
        else return false;
      });
    </script>
</body>
</html>

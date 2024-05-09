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
    <link href="{{asset('js/libs/toastr/toastr.min.css')}}" rel="stylesheet" />


    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <style>
        /* Watermark style */
        .watermark {
            opacity: 0.33;
            color: rgb(129, 116, 116);
            position: fixed;
            top: 75px;
            left: 350px;
            font-size: 100px;
            font-style: oblique;
            /* transform: skew(30deg, 20deg); */
            transform: translate(500px) rotate(45deg);
            transform-origin: 15px -300px;
        }
    </style>

    @livewireStyles
    @yield('css')
</head>

<body>


    <div id="app">
        <div class="container py-5">
            @yield('content')
        </div>
    </div>
    @livewireScripts
    @stack('scripts')
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
          toastr.success(event.datail.success);
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

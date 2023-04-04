<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title','BeliDigi - Beli Produk Digital disini dan Transfer gratis')</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('css/libraries/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/libraries/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/libraries/animate.css') }}" />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="{{ asset('css/libraries/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <style>
      @yield('customCssLine')
    </style>
    <!-- ==== WOW JS ==== -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('js/libraries/wow.min.js') }}"></script>
    <script src="{{ asset('js/libraries/jquery3.js') }}"></script>
    <script src="{{ asset('js/libraries/swiper-bundle.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
  </head>
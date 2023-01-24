<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DVORA</title>
    <link rel="icon" type="image/png" href="{{url('/img/ape-b-n.png')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        @include('partials.header')
        <div class="container-fluid">
            <div class="row h-100 justify-content-center">
                @guest
                    @else
                    <div class="p-0 aside-section col">
                        @include('admin.partials.aside-menu')
                    </div>
                @endguest

                <div class="main-content p-0 col">
                    <main>
                        @yield('content')
                        @yield('dashboard')

                    </main>
                </div>
            </div>
        {{-- @include('partials.footer') --}}
    </div>
</body>

</html>

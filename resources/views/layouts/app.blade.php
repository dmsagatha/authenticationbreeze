<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Laravel with Vite and Tailwind CSS' }}</title>
    
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
  </head>
  <body class="antialiased">
    <div class="flex justify-center items-center h-screen">
      <h1 class="text-center text-3xl text-purple-600 font-bold">
        Laravel with Vite and <a href="https://tailwindcss.com/">Tailwind CSS!</a>
        <i class="fa-solid fa-camera"></i>
        <i class="fa-solid fa-cart-shopping"></i>
      </h1>
    </div>

    @stack('scripts')
  </body>
</html>
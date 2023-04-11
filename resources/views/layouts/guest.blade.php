<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    {{-- <title>{{ $title ?? 'Laravel with Vite and Tailwind CSS' }}</title> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
      <div>
        <a href="/">
          <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
      </div>

      <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
      </div>

      <div class="text-3xl font-bold underline">
        <h1 class="text-center text-3xl text-purple-600 font-bold">
          Laravel with Vite and <a href="https://tailwindcss.com/" target="_blank">Tailwind CSS!</a>
          <i class="fa-solid fa-camera pl-3"></i>
        </h1>
      </div>

      <div x-data="{ open: false }">
        <button @click="open = ! open">Toggle</button>

        <div x-show="open" @click.outside="open = false">Contenido . . .</div>
      </div>

      <div x-data="{ show: false }">
        <button @click="show = !show"
          class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition">Show</button>
        <h1 x-show="show">Alpine Js esta funcionando!</h1>
      </div>
      <hr>

      <div x-data>
        <button @click="alert('Alpine Js esta funcionando!')"
          class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Click</button>
      </div>
    </div>

    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function () {
        Swal.fire(
          'Buen trabajo, estoy funcionando!',
          'Haga clic en el botón!',
          'success'
        )
      });
    </script>
  </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 p-0 min-h-screen flex font-sans bg-gray-50 overflow-hidden">

  <div class="flex w-full h-screen overflow-hidden">

    @if (request()->routeIs('login') || request()->routeIs('register'))
      <div class="hidden md:block md:w-1/2">
        <img src="{{ url('https://plus.unsplash.com/premium_photo-1719843013722-c2f4d69db940?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fHZpYWplc3xlbnwwfHwwfHx8MA%3D%3D') }}" alt="Imagen" class="object-cover w-full h-full">
      </div>
    @endif

    <!-- Contenido principal -->
    <div class="w-full md:w-1/2 flex items-center justify-center px-6 md:px-16 max-h-screen overflow-y-auto">
      <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-10 md:p-12 overflow-hidden">

        <!-- Título principal dinámico -->
        <div class="mb-8 text-center">
          <a href="/" class="text-gray-800 text-4xl font-bold hover:text-indigo-600 transition-colors duration-300">
            {{ request()->routeIs('register') ? 'Registro' : (request()->routeIs('login') ? 'Iniciar sesión' : config('app.name')) }}
          </a>
        </div>


        {{ $slot }}
        @if (request()->routeIs('login') || request()->routeIs('register'))
          <div class="text-center mt-6">
            <a href="{{ url('/') }}" class="text-indigo-600 hover:underline text-sm font-medium">
              ← Volver al inicio
            </a>
          </div>
        @endif

      </div>
    </div>

  </div>

</body>

</html>

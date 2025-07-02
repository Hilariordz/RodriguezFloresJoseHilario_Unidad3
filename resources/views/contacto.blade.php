<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contactanos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body class="bg-gray-100 font-sans">
<nav x-data="{ openDropdown: null, mobileMenuOpen: false }" class="bg-white shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

    <a href="{{ url('/') }}" class="flex items-center">
      <img src="{{ asset('images/Voyago.png') }}" alt="Voyago Logo" class="h-10 w-auto">
    </a>

    <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-gray-600 focus:outline-none">
      <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
      <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>

    <ul class="hidden md:flex items-center gap-6 text-gray-700 font-medium">
      <li><a href="{{ url('/') }}" class="hover:text-yellow-500">Inicio</a></li>

      <li class="relative" @mouseenter="openDropdown = 'destinos'" @mouseleave="openDropdown = null">
        <a href="{{ url('/destinos') }}" class="hover:text-yellow-500">Destinos</a>
        <ul x-show="openDropdown === 'destinos'" x-transition x-cloak
          class="absolute bg-white shadow-lg mt-2 rounded-lg py-2 w-48 z-50">
          <li><a href="{{ url('/playa') }}" class="block px-4 py-2 hover:bg-yellow-100">Playas</a></li>
          <li><a href="{{ url('/ciudades') }}" class="block px-4 py-2 hover:bg-yellow-100">Ciudades</a></li>
          <li><a href="{{ url('/internacionales') }}" class="block px-4 py-2 hover:bg-yellow-100">Internacionales</a></li>
        </ul>
      </li>

      <!-- Reservas con submenú -->
      <li class="relative" @mouseenter="openDropdown = 'reservas'" @mouseleave="openDropdown = null">
        <a href="{{ url('/reservas') }}" class="hover:text-yellow-500">Reservas</a>
        <ul x-show="openDropdown === 'reservas'" x-transition x-cloak
          class="absolute bg-white shadow-lg mt-2 rounded-lg py-2 w-48 z-50">
          <li><a href="{{ url('/reservas/hoteles') }}" class="block px-4 py-2 hover:bg-yellow-100">Hoteles</a></li>
          <li><a href="{{ url('/reservas/vuelos') }}" class="block px-4 py-2 hover:bg-yellow-100">Vuelos</a></li>
          <li><a href="{{ url('/reservas/paquetes') }}" class="block px-4 py-2 hover:bg-yellow-100">Paquetes</a></li>
        </ul>
      </li>

      <!-- Ofertas con submenú -->
      <li class="relative" @mouseenter="openDropdown = 'ofertas'" @mouseleave="openDropdown = null">
        <a href="{{ url('/ofertas') }}" class="hover:text-yellow-500">Ofertas</a>
        <ul x-show="openDropdown === 'ofertas'" x-transition x-cloak
          class="absolute bg-white shadow-lg mt-2 rounded-lg py-2 w-48 z-50">
          <li><a href="{{ url('/ofertas/vuelos') }}" class="block px-4 py-2 hover:bg-yellow-100">Promos de vuelo</a></li>
        </ul>
      </li>
      <li><a href="{{ url('/contacto') }}" class="hover:text-yellow-500">Contacto y Sugerencias</a></li>

      @guest
      <li>
        <a href="{{ route('login') }}"
          class="px-4 py-1 border-2 border-yellow-400 text-yellow-500 rounded-full hover:bg-yellow-100 transition">
          Iniciar sesión
        </a>
      </li>
      <li>
        <a href="{{ route('register') }}"
          class="px-4 py-1 border-2 border-green-400 text-green-600 rounded-full hover:bg-green-100 transition">
          Registrarse
        </a>
      </li>
      @else
      <li class="font-bold text-yellow-600">{{ Auth::user()->name }}</li>
      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="text-blue-600 hover:text-red-500 font-semibold">Cerrar sesión</button>
        </form>
      </li>
      @endguest
    </ul>

  </div>

  <div x-show="mobileMenuOpen" x-cloak @click.away="mobileMenuOpen = false"
    class="md:hidden px-4 pb-4 space-y-2 text-gray-700 font-medium">

    <a href="{{ url('/') }}" @click="mobileMenuOpen = false" class="block hover:text-yellow-500">Inicio</a>
    <a href="{{ url('/destinos') }}" @click="mobileMenuOpen = false" class="block hover:text-yellow-500">Destinos</a>
    <a href="{{ url('/paquetes') }}" @click="mobileMenuOpen = false" class="block hover:text-yellow-500">Paquetes</a>
    <a href="{{ url('/ofertas') }}" @click="mobileMenuOpen = false" class="block hover:text-yellow-500">Ofertas</a>
    <a href="{{ route('contacto') }}" @click="mobileMenuOpen = false" class="block hover:text-yellow-500">Contacto y Sugerencias</a>
    <a href="{{ url('/ayuda') }}" @click="mobileMenuOpen = false" class="block hover:text-yellow-500">Ayuda</a>
    @guest
    <a href="{{ route('login') }}"
      class="block border-2 border-yellow-400 text-yellow-500 rounded-full px-4 py-2 text-center hover:bg-yellow-100 transition">
      Iniciar sesión
    </a>
    <a href="{{ route('register') }}"
      class="block border-2 border-green-400 text-green-600 rounded-full px-4 py-2 text-center hover:bg-green-100 transition">
      Registrarse
    </a>
    @else
    <div class="font-bold text-yellow-600">{{ Auth::user()->name }}</div>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="text-blue-600 hover:text-red-500 font-semibold">Cerrar sesión</button>
    </form>
    @endguest
  </div>
</nav>

    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10 bg-white rounded shadow-md mt-8">
        <form method="POST" action="{{ route('contacto.enviar') }}" class="space-y-6">
            @csrf
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Contáctanos o deja tu sugerencia / queja</h2>

            <div>
                <label for="nombre" class="block mb-1 font-medium text-gray-700">Nombre completo</label>
                <input type="text" name="nombre" id="nombre" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400" />
            </div>

            <div>
                <label for="email" class="block mb-1 font-medium text-gray-700">Correo electrónico</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400" />
            </div>
            <label>Tipo de mensaje:</label>
            <select name="tipo" required>
                <option value="">Selecciona</option>
                <option value="consulta">Consulta</option>
                <option value="sugerencia">Sugerencia</option>
                <option value="queja">Queja</option>
            </select>

            <div>
                <label for="mensaje" class="block mb-1 font-medium text-gray-700">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="5" required
                    class="w-full px-4 py-2 border border-gray-300 rounded resize-none focus:outline-none focus:ring-2 focus:ring-yellow-400"></textarea>
            </div>

            <button type="submit" class="px-6 py-3 bg-yellow-400 hover:bg-yellow-500 text-white rounded font-semibold transition">Enviar</button>
        </form>

        <!-- Datos de contacto a la derecha -->
        <div class="flex flex-col items-center justify-center space-y-6 p-6 bg-yellow-50 rounded shadow">
            <img src="{{ asset('images/Voyago.png') }}" alt="Voyago Logo" class="h-28 w-auto" />

            <div class="text-gray-700 text-center space-y-4 max-w-xs">
                <h3 class="text-xl font-semibold">Conéctate con nosotros</h3>
                <p>Para soporte o cualquier duda, envíanos un correo a:</p>
                <p>
                    <a href="mailto:support@hotmail.com" class="text-yellow-600 hover:text-yellow-800 underline">support@voyago.com</a>
                </p>
                <p>O llámanos al: <br>
                    8442898419</p>
                <div>
                    <h4 class="font-semibold">Sucursal Ramos Arizpe</h4>
                    <address class="not-italic text-sm leading-relaxed">
                        Blvd. Plan de Guadalupe 950, Zona Centro<br />
                        Ramos Arizpe, Coahuila 25900<br />
                        México
                    </address>
                </div>

                <div>
                    <h4 class="font-semibold">Sucursal Monterrey</h4>
                    <address class="not-italic text-sm leading-relaxed">
                        Av. Ignacio Morones Prieto 2800, Piso 3<br />
                        Monterrey, Nuevo León 64750<br />
                        México
                    </address>
                </div>
            </div>
        </div>
    </div>

<footer class="relative bg-gray-900 text-white pt-16 pb-10">
  <div class="container mx-auto px-6 md:px-12 relative z-10 grid grid-cols-1 md:grid-cols-4 gap-8">

   <div class="flex flex-col space-y-8">
  <div class="flex items-center gap-3 mb-4">
    <img src="{{ asset('images/Voyago.png') }}" alt="Voyago Logo" class="w-12 h-12" />
  </div>
  <p class="text-gray-300 max-w-sm">Tu mejor aliado para viajes inolvidables. Explora destinos, promociones y más con Voyago.</p>
</div>
    <!-- Contacto -->
    <div>
      <h3 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Contáctanos</h3>
      <ul class="space-y-3 text-sm">
        <li class="flex items-center gap-3">
          <img src="https://img.icons8.com/ios-filled/24/ffffff/place-marker.png" alt="Ubicación" />
         Ramos Arizpe, Coahuila, México
        </li>
        <li class="flex items-center gap-3">
          <img src="https://img.icons8.com/ios-filled/24/ffffff/email.png" alt="Email" />
          <a href="mailto:contacto@voyago.com" class="hover:underline">contacto@voyago.com</a>
        </li>
        <li class="flex items-center gap-3">
          <img src="https://img.icons8.com/ios-filled/24/ffffff/phone.png" alt="Teléfono" />
          <a href="tel:+528441234567" class="hover:underline">+52 844 123 4567</a>
        </li>
      </ul>
    </div>

    <!-- Mapa del sitio -->
    <div>
      <h3 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Mapa del Sitio</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="/" class="hover:underline">Inicio</a></li>
        <li><a href="/destinos" class="hover:underline">Destinos</a></li>
        <li><a href="/promociones" class="hover:underline">Promociones</a></li>
        <li><a href="/nosotros" class="hover:underline">Sobre Nosotros</a></li>
        <li><a href="/contacto" class="hover:underline">Contacto</a></li>
      </ul>
    </div>

    <!-- Redes sociales -->
    <div>
      <h3 class="text-lg font-semibold mb-4 border-b border-gray-700 pb-2">Síguenos</h3>
      <div class="flex gap-6 mt-2">
        <a href="#" aria-label="Facebook" class="hover:text-blue-600 transition-colors">
          <img src="https://img.icons8.com/ios-filled/28/ffffff/facebook--v1.png" alt="Facebook" />
        </a>
        <a href="#" aria-label="Instagram" class="hover:text-pink-500 transition-colors">
          <img src="https://img.icons8.com/ios-filled/28/ffffff/instagram-new.png" alt="Instagram" />
        </a>
        <a href="#" aria-label="YouTube" class="hover:text-red-600 transition-colors">
          <img src="https://img.icons8.com/ios-filled/28/ffffff/youtube-play.png" alt="YouTube" />
        </a>
      </div>
    </div>
  </div>

  <div class="mt-16 border-t border-gray-700 pt-6 text-center text-sm text-gray-400 select-none">
    © 2025 Voyago. Todos los derechos reservados.
  </div>
</footer>

  <script>
  window.$zoho = window.$zoho || {};
  $zoho.salesiq = $zoho.salesiq || { ready: function() {} };
</script>
<script id="zsiqscript" src="https://salesiq.zohopublic.com/widget?wc=siq09c2ab87a8a2d1e47eb432c4146319ccff10667509eac47ab8e81d4fd40b629c" defer></script>

<a href="{{ route('help') }}"
   class="fixed bottom-5 left-5 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center gap-2 px-3 py-2 shadow-lg transition
          text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl
          w-auto sm:w-auto md:w-auto lg:w-auto xl:w-auto
          max-w-[180px] sm:max-w-[200px] md:max-w-[220px] lg:max-w-[250px] xl:max-w-[300px]
          z-[9999]"
   title="Ayuda"
   style="border-radius: 9999px; font-size: clamp(0.85rem, 1.5vw, 1rem);">
   <img src="https://img.icons8.com/?size=100&id=aIYDmrSk6X13&format=png&color=ffffff" alt="Icono ayuda"
        class="w-4 h-4 sm:w-5 sm:h-5 md:w-6 md:h-6 lg:w-7 lg:h-7 xl:w-8 xl:h-8" />
   <span class="font-semibold select-none truncate">Ayuda</span>
</a>
</body>

</html>
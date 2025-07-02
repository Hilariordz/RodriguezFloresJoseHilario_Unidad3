@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<section class="max-w-7xl mx-auto px-4 py-10 space-y-12 font-sans">

  <div class="w-full rounded-xl overflow-hidden">
  <div class="relative">
    <img src="https://a.travel-assets.com/travel-assets-manager/destu-41345/41345-master.jpg?im=SmartCrop,width=1856,height=796" alt="Imagen de fondo" class="w-full h-96 object-cover">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    
    <!-- Tarjeta amarilla de oferta -->
    <div class="absolute top-1/2 left-10 -translate-y-1/2 bg-yellow-400 p-6 rounded-xl max-w-sm shadow-lg">
      <h2 class="text-3xl font-serif font-semibold text-gray-900 mb-2">Gran oferta de verano: +25% dto</h2>
      <p class="text-sm text-gray-800 mb-4">
        Ahorra +25% y disfruta el verano en hoteles seleccionados con los Precios para socios. Reserva hasta 21/07, viaja hasta 31/10/25.
      </p>
      <a href="#" class="inline-block bg-gray-900 text-white font-semibold text-sm px-4 py-2 rounded-full">
        Reservar antes del 21/07
      </a>
    </div>
  </div>

  <!-- Sección inferior con tres recuadros -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
    <!-- Opción 1 -->
    <div class="bg-yellow-100 rounded-xl p-4 flex items-center gap-4">
      <img src="ruta-imagen-vuelos.jpg" alt="Vuelos" class="w-16 h-16 object-cover rounded-lg">
      <div>
        <h3 class="font-bold text-sm text-gray-800">Recibe alertas si los precios de vuelos bajan</h3>
        <a href="#" class="text-sm text-yellow-800 font-semibold">Buscar vuelos</a>
      </div>
    </div>

    <!-- Opción 2 -->
    <div class="bg-yellow-300 rounded-xl p-4 flex items-center gap-4">
      <img src="ruta-imagen-vuelo-hotel.jpg" alt="Reserva vuelo y hotel" class="w-16 h-16 object-cover rounded-lg">
      <div>
        <h3 class="font-bold text-sm text-gray-800">Puedes ahorrar al reservar juntos vuelo y hotel</h3>
        <a href="#" class="text-sm text-yellow-900 font-semibold flex items-center gap-1">Reservar <span>→</span></a>
      </div>
    </div>

    <!-- Opción 3 -->
    <div class="bg-yellow-400 rounded-xl p-4 flex items-center gap-4">
      <img src="ruta-imagen-hotel.jpg" alt="Hoteles" class="w-16 h-16 object-cover rounded-lg">
      <div>
        <h3 class="font-bold text-sm text-gray-900">Los socios ahorran desde un 10% en más de 100,000 hoteles en todo el mundo</h3>
        <a href="#" class="text-sm text-gray-900 font-semibold flex items-center gap-1">Acceder a beneficios <span>→</span></a>
      </div>
    </div>
  </div>
</div>


@endsection

@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<section class="max-w-6xl mx-auto px-4 py-10">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airplane,sky" alt="Vuelo CDMX - Nueva York" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Nueva York</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 10 Jul 2025 - Llegada: 10 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 5,200 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,runway" alt="Vuelo CDMX - París" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - París</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Jul 2025 - Llegada: 16 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 9,800 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airplane,city" alt="Vuelo CDMX - Tokio" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Tokio</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 20 Jul 2025 - Llegada: 21 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 11,500 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 4 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,plane" alt="Vuelo CDMX - Londres" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Londres</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 25 Jul 2025 - Llegada: 26 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 10,700 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 5 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?plane,sunset" alt="Vuelo CDMX - Miami" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Miami</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 01 Ago 2025 - Llegada: 01 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 4,800 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 6 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,plane" alt="Vuelo CDMX - Buenos Aires" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Buenos Aires</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 05 Ago 2025 - Llegada: 06 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 7,900 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 7 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airplane,sky" alt="Vuelo CDMX - Berlín" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Berlín</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 10 Ago 2025 - Llegada: 11 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 10,300 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 8 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,runway" alt="Vuelo CDMX - Cancún" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Cancún</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Ago 2025 - Llegada: 15 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 2,800 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 9 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?plane,sunset" alt="Vuelo CDMX - Los Ángeles" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Los Ángeles</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 20 Ago 2025 - Llegada: 20 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 4,500 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 10 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,city" alt="Vuelo CDMX - Madrid" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Madrid</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 25 Ago 2025 - Llegada: 26 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 9,200 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 11 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airplane,cityscape" alt="Vuelo CDMX - Toronto" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Toronto</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 30 Ago 2025 - Llegada: 30 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 6,000 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 12 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,runway" alt="Vuelo CDMX - Río de Janeiro" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Río de Janeiro</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 05 Sep 2025 - Llegada: 06 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 8,500 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 13 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?plane,airport" alt="Vuelo CDMX - Sídney" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Sídney</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 10 Sep 2025 - Llegada: 11 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 15,300 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 14 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,sky" alt="Vuelo CDMX - Dubái" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Dubái</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Sep 2025 - Llegada: 16 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 14,700 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 15 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airplane,clouds" alt="Vuelo CDMX - San Francisco" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - San Francisco</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 20 Sep 2025 - Llegada: 20 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 5,500 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 16 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,cityscape" alt="Vuelo CDMX - Chicago" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Chicago</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 25 Sep 2025 - Llegada: 25 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 5,700 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 17 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airplane,sky" alt="Vuelo CDMX - Montreal" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Montreal</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 30 Sep 2025 - Llegada: 30 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 6,300 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 18 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,runway" alt="Vuelo CDMX - Ámsterdam" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Ámsterdam</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 05 Oct 2025 - Llegada: 06 Oct 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 10,100 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 19 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?plane,sunset" alt="Vuelo CDMX - Las Vegas" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Las Vegas</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 10 Oct 2025 - Llegada: 10 Oct 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 4,300 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- 20 -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?airport,city" alt="Vuelo CDMX - Miami" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Vuelo CDMX - Miami</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Oct 2025 - Llegada: 15 Oct 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 4,600 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

  </div>
</section>
@endsection

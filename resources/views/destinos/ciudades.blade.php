@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>


<section class="max-w-7xl mx-auto px-6 py-10">
  <h2 class="text-3xl font-bold mb-8 text-center">Vuelos a Ciudades Mexicanas e Internacionales</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

    <!-- Ciudades Mexicanas -->

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1652073175063-402b831cc9b7?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Ciudad de México" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> CDMX</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 12 Jul 2025 - Llegada: 12 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 1,200 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1708733968596-b5a5b1cdfdd0?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Guadalajara" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> Guadalajara</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Jul 2025 - Llegada: 15 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 1,350 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1618950399704-86fb060cd003?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Monterrey" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> Monterrey</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 18 Jul 2025 - Llegada: 18 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 1,400 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1602088113235-229c19758e9f?q=80&w=1167&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Cancún" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> Cancún</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 20 Jul 2025 - Llegada: 20 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 2,500 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1659775226523-b31d25ddb5fa?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Mérida" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> Mérida</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 22 Jul 2025 - Llegada: 22 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 2,000 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <!-- Ciudades Internacionales -->

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1496442226666-8d4d0e62e6e9?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Nueva York" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> Nueva York</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 10 Ago 2025 - Llegada: 10 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">USD$ 350 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1566865035666-59a017dcd807?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" París" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> París</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Ago 2025 - Llegada: 15 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">EUR€ 400 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1542640244-7e672d6cef4e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Tokio" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> Tokio</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 20 Ago 2025 - Llegada: 20 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">USD$ 700 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1529655683826-aba9b3e77383?q=80&w=1065&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Londres" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> Londres</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 25 Ago 2025 - Llegada: 25 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">GBP£ 320 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1528072164453-f4e8ef0d475a?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt=" Sídney" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1"> Sídney</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 30 Ago 2025 - Llegada: 30 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">AUD$ 900 </p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver vuelo</a>
      </div>
    </div>

  </div>
</section>



@endsection
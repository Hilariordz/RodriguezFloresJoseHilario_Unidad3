@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<section class="max-w-6xl mx-auto px-4 py-10">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/32815699/pexels-photo-32815699.jpeg" alt="Nueva York" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Nueva York</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 10 Jul 2025 - Llegada: 10 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 5,200 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/1530259/pexels-photo-1530259.jpeg" alt="París" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">París</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Jul 2025 - Llegada: 16 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 9,800 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/358220/pexels-photo-358220.jpeg?auto=compress&w=600" alt="Tokio" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Tokio</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 20 Jul 2025 - Llegada: 21 Jul 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 11,500 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 6 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/1060803/pexels-photo-1060803.jpeg" alt="Buenos Aires" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Buenos Aires</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 05 Ago 2025 - Llegada: 06 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 7,900 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 7 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/2570063/pexels-photo-2570063.jpeg" alt="Berlín" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Berlín</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 10 Ago 2025 - Llegada: 11 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 10,300 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 8 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/1802255/pexels-photo-1802255.jpeg" alt="Cancún" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Cancún</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Ago 2025 - Llegada: 15 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 2,800 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 10 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/930595/pexels-photo-930595.jpeg" alt="Madrid" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Madrid</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 25 Ago 2025 - Llegada: 26 Ago 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 9,200 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 12 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/351283/pexels-photo-351283.jpeg" alt="Río de Janeiro" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Río de Janeiro</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 05 Sep 2025 - Llegada: 06 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 8,500 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 13 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/2193300/pexels-photo-2193300.jpeg" alt="Sídney" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Sídney</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 10 Sep 2025 - Llegada: 11 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 15,300 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 14 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1528702748617-c64d49f918af?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dubái" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Dubái</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Sep 2025 - Llegada: 16 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 14,700 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 15 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1719858403364-83f7442a197e?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="San Francisco" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">San Francisco</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 20 Sep 2025 - Llegada: 20 Sep 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 5,500 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

    <!-- 20 -->
    <div class="card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://plus.unsplash.com/premium_photo-1697730215093-baeae8060bfe?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Miami" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Miami</h3>
        <p class="text-sm text-gray-500 mb-3">Salida: 15 Oct 2025 - Llegada: 15 Oct 2025</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 4,600 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-900">Ver vuelo</a>
      </div>
    </div>

  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, {
      threshold: 0.1
    });

    cards.forEach(card => {
      observer.observe(card);
    });
  });
</script>
<style>
  .card {
    transition: all 0.7s cubic-bezier(.4,0,.2,1);
    opacity: 0;
    transform: translateY(40px);
  }
  .card.show {
    opacity: 1 !important;
    transform: translateY(0) !important;
  }
</style>
@endsection

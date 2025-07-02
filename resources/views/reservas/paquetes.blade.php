@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<section class="max-w-6xl mx-auto px-4 py-10">

  <!-- Input para buscar -->
  <div class="mb-6 text-center">
    <input
      type="text"
      id="searchInput"
      placeholder="Buscar paquete..."
      class="w-full max-w-md px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
      onkeyup="filterPackages()"
    />
  </div>

  <div id="packagesGrid" class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Repite esta tarjeta con tus paquetes -->
    <div class="package-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80" alt="Paquete París" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Paquete a París</h3>
        <p class="text-sm text-gray-500 mb-3">5 días / 4 noches - Desde 15 Jul hasta 20 Jul</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 18,500 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver paquete</a>
      </div>
    </div>

    <div class="package-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://source.unsplash.com/featured/?tokyo,city" alt="Paquete Tokio" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Paquete a Tokio</h3>
        <p class="text-sm text-gray-500 mb-3">7 días / 6 noches - Desde 10 Ago hasta 17 Ago</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 24,900 por persona</p>
        <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ver paquete</a>
      </div>
    </div>

    <!-- ... sigue con el resto de tus paquetes igual, asegurándote de que cada div tenga la clase "package-card" -->

  </div>

</section>

<script>
  function filterPackages() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const cards = document.querySelectorAll('.package-card');

    cards.forEach(card => {
      const title = card.querySelector('h3').textContent.toLowerCase();
      const desc = card.querySelector('p').textContent.toLowerCase();
      if (title.includes(filter) || desc.includes(filter)) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  }
</script>

@endsection

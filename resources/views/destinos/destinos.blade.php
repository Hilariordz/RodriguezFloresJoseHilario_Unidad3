@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<section class="max-w-7xl mx-auto px-4 py-10 space-y-12">

  <!-- FORMULARIO DE BÚSQUEDA -->
  <div class="flex justify-center mt-8">
    <form onsubmit="return false;" class="w-full max-w-2xl flex gap-2">
      <input 
        type="text" 
        name="q" 
        placeholder="Busca por destino o ubicación..." 
        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
      >
      <button 
        type="submit" 
        class="px-6 py-2 bg-blue-600 text-white font-semibold rounded hover:bg-blue-700"
      >
        Buscar
      </button>
    </form>
  </div>

  <!-- HEADER -->
  <div id="seccion-header" class="relative h-[600px] w-full">
    <img src="https://images.pexels.com/photos/28408336/pexels-photo-28408336.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=800&w=1600" 
         class="w-full h-full object-cover brightness-75" 
         alt="Header destinos">
    <div class="absolute inset-0 flex items-center justify-center px-4">
      <h1 class="text-white text-4xl md:text-5xl font-bold text-center">¿Buscas nuevos destinos?</h1>
    </div>
  </div>

  <!-- SECCIÓN RENTAS FAVORITAS -->
  <div id="seccion-favoritas">
    <h2 class="text-2xl font-bold mb-6">Elige tu renta vacacional favorita</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      @foreach(['Casas', 'Departamentos', 'Cabañas', 'Villas'] as $categoria)
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
          <img src="https://source.unsplash.com/400x250/?{{ strtolower($categoria) }}" class="w-full h-32 object-cover rounded-t-lg" />
          <div class="text-center py-2 font-medium">{{ $categoria }}</div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- SECCIÓN DESTINOS -->
  <div id="seccion-destinos">
    <h2 class="text-2xl font-bold mb-6">Resultados</h2>
    <div id="resultados" class="grid grid-cols-1 md:grid-cols-4 gap-6">
      @foreach([
        ['Hacienda La Magdalena', 'Zapopan, Jalisco', 3152],
        ['MyPlace Donceles', 'Centro histórico, CDMX', 1262],
        ['Casa Itzá', 'Tulum, Quintana Roo', 1355],
        ['Riviera Maya Suites', 'Playa del Carmen, Q. Roo', 1780],
        ['Cabañas El Estribo', 'Valle de Bravo, Edo. Méx.', 1980],
        ['Casa Makawi - Adults Only', 'San Miguel de Allende, Gto.', 3440],
        ['Casa Wüüh', 'Tepoztlán, Morelos', 1850],
        ['Bosque La Luna', 'Mazamitla, Jalisco', 1620],
      ] as [$nombre, $ubicacion, $precio])
        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col destino-item"
             data-nombre="{{ strtolower($nombre) }}"
             data-ubicacion="{{ strtolower($ubicacion) }}">
          <img src="https://source.unsplash.com/400x250/?{{ strtolower($categoria) }}" class="w-full h-32 object-cover rounded-t-lg" />
          <div class="p-4 flex flex-col flex-grow">
            <h3 class="font-semibold text-sm mb-1">{{ $nombre }}</h3>
            <p class="text-gray-500 text-xs mb-1">{{ $ubicacion }}</p>
            <div class="mt-auto">
              <p class="text-gray-700 text-sm">Desde</p>
              <p class="text-blue-600 font-bold text-lg">${{ number_format($precio) }} MXN</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <p id="sin-resultados" class="text-center text-gray-500 mt-4 hidden">No se encontraron resultados.</p>
  </div>


</section>

<!-- SCRIPT DE BÚSQUEDA -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const input = document.querySelector('input[name="q"]');
    const items = document.querySelectorAll('.destino-item');
    const header = document.getElementById('seccion-header');
    const favoritas = document.getElementById('seccion-favoritas');
    const otras = document.getElementById('otras-secciones');
    const sinResultados = document.getElementById('sin-resultados');

    input.addEventListener('input', function () {
      const query = input.value.trim().toLowerCase();
      let totalVisibles = 0;

      if (query === '') {
        // Mostrar todo
        header.style.display = '';
        favoritas.style.display = '';
        otras.style.display = '';
        items.forEach(item => item.style.display = '');
        sinResultados.classList.add('hidden');
      } else {
        // Ocultar lo demás
        header.style.display = 'none';
        favoritas.style.display = 'none';
        otras.style.display = 'none';

        items.forEach(item => {
          const nombre = item.dataset.nombre;
          const ubicacion = item.dataset.ubicacion;

          if (nombre.includes(query) || ubicacion.includes(query)) {
            item.style.display = '';
            totalVisibles++;
          } else {
            item.style.display = 'none';
          }
        });

        sinResultados.classList.toggle('hidden', totalVisibles > 0);
      }
    });
  });
</script>

@endsection

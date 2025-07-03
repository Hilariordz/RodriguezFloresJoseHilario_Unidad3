@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<style>
  /* Animaciones personalizadas */
  .fade-in {
    animation: fadeInUp 1s cubic-bezier(0.23, 1, 0.32, 1);
  }
  @keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(40px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  .shine:hover {
    box-shadow: 0 8px 32px 0 rgba(0,0,0,0.25), 0 1.5px 8px 0 #60a5fa;
    transform: scale(1.04) translateY(-4px) rotate(-1deg);
    transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
  }
  .btn-anim {
    transition: all 0.2s cubic-bezier(0.23, 1, 0.32, 1);
  }
  .btn-anim:hover {
    background: linear-gradient(90deg, #2563eb 0%, #38bdf8 100%);
    transform: scale(1.07) translateY(-2px);
    box-shadow: 0 4px 16px 0 #38bdf8aa;
  }
  .gradient-text {
    background: linear-gradient(90deg, #2563eb 0%, #38bdf8 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
  }
</style>

<!-- HERO HEADER CON FORMULARIO CENTRADO -->
<div id="seccion-header" class="relative w-full h-[90vh] min-h-[500px] flex items-center justify-center overflow-hidden shadow-2xl fade-in">
  <img src="https://images.pexels.com/photos/28408336/pexels-photo-28408336.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=800&w=1600" 
       class="absolute inset-0 w-full h-full object-cover brightness-75 scale-105 transition-transform duration-700" 
       alt="Header destinos">
  <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/30 to-transparent"></div>
  <div class="relative z-10 flex flex-col items-center w-full px-4">
    <h1 class="gradient-text text-5xl md:text-6xl font-extrabold text-center drop-shadow-lg animate-pulse mb-8">¿Buscas nuevos destinos?</h1>
    <form onsubmit="return false;" class="w-full max-w-2xl flex gap-2 bg-white/80 shadow-xl rounded-xl p-4 backdrop-blur-lg fade-in">
      <input 
        type="text" 
        name="q" 
        placeholder="Busca por destino o ubicación..." 
        class="w-full px-4 py-2 border border-blue-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-lg bg-white/70"
      >
      <button 
        type="submit" 
        class="px-6 py-2 bg-gradient-to-r from-blue-600 to-sky-400 text-white font-semibold rounded btn-anim shadow-lg"
      >
        Buscar
      </button>
    </form>
  </div>
</div>

<section class="max-w-7xl mx-auto px-4 py-10 space-y-16">

@php
  $categorias = [
    'Casas' => 'https://images.pexels.com/photos/1115804/pexels-photo-1115804.jpeg',
    'Departamentos' => 'https://images.pexels.com/photos/271624/pexels-photo-271624.jpeg',
    'Cabañas' => 'https://images.pexels.com/photos/32780064/pexels-photo-32780064.jpeg',
    'Villas' => 'https://images.pexels.com/photos/206172/pexels-photo-206172.jpeg',
  ];
@endphp

<div id="seccion-favoritas" class="fade-in">
  <h2 class="text-3xl font-bold mb-8 gradient-text">Elige tu renta vacacional favorita</h2>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    @foreach($categorias as $categoria => $imagen)
      <div class="bg-white/90 rounded-2xl shadow-xl hover:shadow-2xl shine transition flex flex-col items-center cursor-pointer group relative overflow-hidden">
        <img src="{{ $imagen }}" alt="{{ $categoria }}" 
          class="w-full h-36 object-cover rounded-t-2xl group-hover:scale-105 transition-transform duration-500" />
        <div class="text-center py-3 font-semibold text-lg gradient-text">{{ $categoria }}</div>
        <span class="absolute inset-0 bg-gradient-to-t from-blue-500/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></span>
      </div>
    @endforeach
  </div>
</div>


@php
  $destinos = [
    ['Hacienda La Magdalena', 'Zapopan, Jalisco', 3152, 'https://images.pexels.com/photos/16566853/pexels-photo-16566853.jpeg'],
    ['MyPlace Donceles', 'Centro histórico, CDMX', 1262, 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg'],
    ['Casa Itzá', 'Tulum, Quintana Roo', 1355, 'https://images.pexels.com/photos/261101/pexels-photo-261101.jpeg'],
    ['Riviera Maya Suites', 'Playa del Carmen, Q. Roo', 1780, 'https://images.pexels.com/photos/210186/pexels-photo-210186.jpeg'],
    ['Cabañas El Estribo', 'Valle de Bravo, Edo. Méx.', 1980, 'https://images.pexels.com/photos/1054218/pexels-photo-1054218.jpeg'],
    ['Casa Makawi - Adults Only', 'San Miguel de Allende, Gto.', 3440, 'https://images.pexels.com/photos/221457/pexels-photo-221457.jpeg'],
    ['Casa Wüüh', 'Tepoztlán, Morelos', 1850, 'https://images.pexels.com/photos/280229/pexels-photo-280229.jpeg'],
    ['Bosque La Luna', 'Mazamitla, Jalisco', 1620, 'https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg'],
  ];
@endphp

<div id="seccion-destinos" class="fade-in">
  <h2 class="text-3xl font-bold mb-8 gradient-text">Resultados</h2>
  <div id="resultados" class="grid grid-cols-1 md:grid-cols-4 gap-8">
    @foreach($destinos as [$nombre, $ubicacion, $precio, $imagen])
      <div class="bg-white/90 rounded-2xl shadow-xl overflow-hidden flex flex-col destino-item shine transition group relative cursor-pointer animate-fade-in"
           data-nombre="{{ strtolower($nombre) }}"
           data-ubicacion="{{ strtolower($ubicacion) }}">
        <img src="{{ $imagen }}?auto=compress&cs=tinysrgb&h=250&w=400" alt="{{ $nombre }}" 
          class="w-full h-36 object-cover rounded-t-2xl group-hover:scale-105 transition-transform duration-500" />
        <div class="p-5 flex flex-col flex-grow">
          <h3 class="font-bold text-lg mb-1 gradient-text group-hover:underline">{{ $nombre }}</h3>
          <p class="text-gray-500 text-sm mb-2">{{ $ubicacion }}</p>
          <div class="mt-auto">
            <p class="text-gray-700 text-xs">Desde</p>
            <p class="text-blue-600 font-extrabold text-2xl">${{ number_format($precio) }} MXN</p>
          </div>
        </div>
        <span class="absolute inset-0 bg-gradient-to-t from-blue-400/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></span>
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
        if (otras) otras.style.display = '';
        items.forEach(item => item.style.display = '');
        sinResultados.classList.add('hidden');
      } else {
        // Ocultar lo demás
        header.style.display = 'none';
        favoritas.style.display = 'none';
        if (otras) otras.style.display = 'none';

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

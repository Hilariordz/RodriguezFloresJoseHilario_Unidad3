@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
  }

  .hero {
    position: relative;
    width: 100%;
    height: 80vh;
    background-image:
      linear-gradient(rgba(51, 51, 51, 0.5), rgba(51, 51, 51, 0.5)),
      url('https://images.unsplash.com/photo-1619120238346-978e07731e77?w=1600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8dHVyaXNtb3xlbnwwfHwwfHx8MA%3D%3D');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .hero-text {
    color: white;
    font-size: 3rem;
    font-weight: bold;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
    text-align: center;
    padding: 1rem;
    z-index: 1;
  }

  .search-box {
    background: white;
    padding: 20px;
    margin: -60px auto 30px;
    max-width: 90%;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    position: relative;
    z-index: 2;
  }

  .form-row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .form-group {
    flex: 1 1 200px;
    display: flex;
    flex-direction: column;
  }

  .form-group label {
    margin-bottom: 5px;
    font-weight: 500;
  }

  .form-group input {
    padding: 8px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .form-group button {
    margin-top: auto;
    background: #2563eb;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .form-group button:hover {
    background: #1e40af;
  }

  .form-options {
    margin-top: 15px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    font-size: 14px;
  }

  .promo-bar {
    background: #121c3a;
    color: white;
    padding: 20px;
    max-width: 90%;
    margin: 30px auto;
    border-radius: 10px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
  }

  .promo-button {
    background: #2563eb;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
  }

  .promo-button:hover {
    background: #1e40af;
  }

  .promo-cards {
    max-width: 90%;
    margin: 40px auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
  }

  .card {
    background: #fde047;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    height: 100%;
  }

  .card img {
    width: 100%;
    height: 160px;
    object-fit: cover;
  }

  .card-body {
    padding: 15px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
  }

  .card-body h3 {
    font-size: 16px;
    margin-bottom: 10px;
    font-weight: bold;
  }

  .card-body a {
    margin-top: auto;
    color: #1d4ed8;
    font-weight: 500;
    text-decoration: none;
  }

  .card-body a:hover {
    text-decoration: underline;
  }

  .flight-dates {
    text-align: center;
    margin: 60px auto;
    padding: 0 20px;
    max-width: 90%;
  }

  .flight-dates h2 {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .flight-dates p {
    color: #555;
    font-size: 16px;
  }

  @media (max-width: 768px) {
    .hero-text {
      font-size: 2rem;
    }

    .form-row {
      flex-direction: column;
    }

    .promo-bar {
      flex-direction: column;
      align-items: flex-start;
    }

    .promo-button {
      width: 100%;
      text-align: center;
    }
  }

  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }

  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }

  .card,
  .bg-white.rounded-xl.shadow-md,
  .bg-white.rounded-xl.shadow-lg {
    transition: transform 0.3s cubic-bezier(.4,0,.2,1), box-shadow 0.3s cubic-bezier(.4,0,.2,1);
  }
  .card:hover,
  .bg-white.rounded-xl.shadow-md:hover,
  .bg-white.rounded-xl.shadow-lg:hover {
    transform: translateY(-8px) scale(1.03);
    box-shadow: 0 10px 24px rgba(0,0,0,0.15), 0 1.5px 4px rgba(0,0,0,0.08);
  }

  button,
  .promo-button,
  .bg-blue-600 {
    transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
  }
  button:hover,
  .promo-button:hover,
  .bg-blue-600:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 16px rgba(37,99,235,0.15);
  }

  .card img,
  .bg-white.rounded-xl.shadow-md img,
  .bg-white.rounded-xl.shadow-lg img {
    transition: transform 0.4s cubic-bezier(.4,0,.2,1);
  }
  .card:hover img,
  .bg-white.rounded-xl.shadow-md:hover img,
  .bg-white.rounded-xl.shadow-lg:hover img {
    transform: scale(1.08);
  }

  .card-body a,
  a.inline-block {
    position: relative;
    transition: color 0.2s;
  }
  .card-body a::after,
  a.inline-block::after {
    content: "";
    position: absolute;
    left: 0; bottom: -2px;
    width: 100%;
    height: 2px;
    background: #2563eb;
    transform: scaleX(0);
    transition: transform 0.3s;
    transform-origin: left;
  }
  .card-body a:hover,
  a.inline-block:hover {
    color: #1e40af;
  }
  .card-body a:hover::after,
  a.inline-block:hover::after {
    transform: scaleX(1);
  }
  #carousel {
    min-height: 380px;
    height: 420px;
  }
  #carousel > div {
    min-width: 400px;
    max-width: 420px;
    height: 100%;
  }
  .promo-cards .card {
    transition: transform 0.3s cubic-bezier(.68,-0.55,.27,1.55), box-shadow 0.3s;
  }
  .promo-cards .card:hover {
    transform: translateY(-10px) scale(1.04) rotate(-2deg);
    box-shadow: 0 12px 32px rgba(253,224,71,0.25);
  }

  /* Hoteles internacionales: giro */
  .hoteles-internacionales .bg-white.rounded-xl.shadow-md {
    transition: transform 0.4s cubic-bezier(.4,0,.2,1), box-shadow 0.4s;
  }
  .hoteles-internacionales .bg-white.rounded-xl.shadow-md:hover {
    transform: rotateY(8deg) scale(1.05);
    box-shadow: 0 16px 32px rgba(30,64,175,0.18);
  }

  /* Paquetes turísticos: sombra y escala */
  .paquetes-turisticos .bg-white.rounded-xl.shadow-md {
    transition: box-shadow 0.3s, transform 0.3s;
  }
  .paquetes-turisticos .bg-white.rounded-xl.shadow-md:hover {
    box-shadow: 0 20px 40px rgba(37,99,235,0.18);
    transform: scale(1.07);
  }
</style>

<div class="hero">
  <div class="hero-text">Viaja más, paga menos</div>
</div>

<div class="search-box">
  <form id="searchForm">
    <div class="form-row">
      <div class="form-group" style="position:relative;">
        <label>¿A dónde quieres ir?</label>
        <input
          type="text"
          id="destino"
          name="destino"
          placeholder="México"
          autocomplete="off"
          required
        >
        <ul id="autocomplete-list"
            style="position:absolute;top:100%;left:0;right:0;max-height:200px;overflow-y:auto;background:#fff;color:#000;z-index:1000;list-style:none;padding:0;margin:0;border:1px solid #ccc;border-top:none;display:none;">
        </ul>
      </div>

     <div class="form-group">
  <label>Fechas</label>
  <input
    type="text"
    id="fechas"
    name="fechas"
    placeholder="Selecciona fechas"
    required
  >
</div>
      <div class="form-group">
        <label>Huéspedes</label>
        <input type="text" id="huespedes" name="huespedes" placeholder="2 personas, 1 habitación" required>
      </div>
      <div class="form-group">
        <button type="submit">Buscar</button>
      </div>
    </div>
    <div class="form-options">
      <label><input type="checkbox" name="vuelo" value="1"> Agregar un vuelo</label>
      <label><input type="checkbox" name="auto" value="1"> Agregar un auto</label>
    </div>
  </form>
</div>

<div class="promo-bar">
  <div class="promo-text">Inicia sesión y ahorra desde 10% en más de 100,000 hoteles en todo el mundo por ser socio.</div>
  <a href="{{ url('/login') }}" class="promo-button">Iniciar sesión</a>
</div>

<div class="promo-cards">
  <div class="card">
    <img src="{{ url('https://images.trvl-media.com/lodging/2000000/1490000/1484900/1484897/71dcb97d.jpg?impolicy=resizecrop&amp;rw=1200&amp;ra=fit') }}" alt="Promo 1">
    <div class="card-body">
      <h3>Recibe alertas si los precios de vuelos bajan</h3>
      <a href="#">Buscar vuelos →</a>
    </div>
  </div>
  <div class="card">
    <img src="{{ url('https://images.trvl-media.com/lodging/2000000/1490000/1484900/1484897/71056cb2.jpg?impolicy=resizecrop&rw=1200&ra=fit') }}" alt="Promo 2">
    <div class="card-body">
      <h3>Puedes ahorrar al reservar juntos vuelo y hotel</h3>
      <a href="#">Reservar →</a>
    </div>
  </div>
  <div class="card">
    <img src="{{ url('https://images.trvl-media.com/lodging/2000000/1490000/1484900/1484897/dcc0c477.jpg?impolicy=resizecrop&rw=1200&ra=fit') }}" alt="Promo 3">
    <div class="card-body">
      <h3>Los socios ahorran desde un 10% en más de 100,000 hoteles en todo el mundo</h3>
      <a href="#">Acceder a beneficios →</a>
    </div>
  </div>
</div>

<section class="max-w-6xl mx-auto px-4 py-10 paquetes-turisticos">
  <h2 class="text-3xl font-bold mb-8 text-center">Promociones irresistibles en paquetes turísticos</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/751268/pexels-photo-751268.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Paquete a Cancún" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Paquete a Cancún</h3>
        <p class="text-sm text-gray-500 mb-3">4 días / 3 noches - Desde 09 Sept hasta 13 Sept</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 4,050 por persona</p>
        <a href="https://example.com/cancun" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Ver paquete
        </a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/16147523/pexels-photo-16147523/free-photo-of-mar-puesta-de-sol-playa-vacaciones.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Paquete a Playa del Carmen" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Paquete a Playa del Carmen</h3>
        <p class="text-sm text-gray-500 mb-3">4 días / 3 noches - Desde 01 Oct hasta 04 Oct</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 3,069 por persona</p>
        <a href="https://example.com/playa-del-carmen" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Ver paquete
        </a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/2439004/pexels-photo-2439004.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Paquete a Cozumel" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Paquete a Cozumel</h3>
        <p class="text-sm text-gray-500 mb-3">5 días / 4 noches - Desde 08 Sept hasta 13 Sept</p>
        <p class="text-blue-600 font-bold text-lg mb-4">MXN$ 6,997 por persona</p>
        <a href="https://example.com/cozumel" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Ver paquete
        </a>
      </div>
    </div>
  </div>
  <div class="text-center mt-6">
    <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Ver más ofertas</button>
  </div>
</section>

<section class="max-w-6xl mx-auto px-4 py-10 hoteles-internacionales">
  <h2 class="text-3xl font-bold mb-8 text-center"> Hoteles Internacionales</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Hotel París -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/11783047/pexels-photo-11783047.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Hotel París" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Hotel Eiffel Paris</h3>
        <p class="text-sm text-gray-500 mb-2">A 1.2 km de la Torre Eiffel - París, Francia</p>
        <p class="text-sm text-gray-600">1 noche, 2 personas desde:</p>
        <p class="text-green-600 font-bold text-lg mb-3">€180</p>
        <span class="inline-block bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded mb-3">-25%</span><br>
        <a href="https://example.com/hotel-paris" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Ver hotel
        </a>
      </div>
    </div>

    <!-- Hotel Tokio -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/3520548/pexels-photo-3520548.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Hotel Tokio" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Tokyo Bay Hotel</h3>
        <p class="text-sm text-gray-500 mb-2">A 5 km de Shibuya - Tokio, Japón</p>
        <p class="text-sm text-gray-600">1 noche, 2 personas desde:</p>
        <p class="text-green-600 font-bold text-lg mb-3">¥14,500</p>
        <span class="inline-block bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded mb-3">-18%</span><br>
        <a href="https://example.com/hotel-tokyo" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Ver hotel
        </a>
      </div>
    </div>

    <!-- Hotel Nueva York -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
      <img src="https://images.pexels.com/photos/7078862/pexels-photo-7078862.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Hotel Nueva York" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold mb-1">Manhattan View Hotel</h3>
        <p class="text-sm text-gray-500 mb-2">A 700 m de Times Square - Nueva York, EE.UU.</p>
        <p class="text-sm text-gray-600">1 noche, 2 personas desde:</p>
        <p class="text-green-600 font-bold text-lg mb-3">USD $220</p>
        <span class="inline-block bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded mb-3">-32%</span><br>
        <a href="https://example.com/hotel-nyc" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Ver hotel
        </a>
      </div>
    </div>

  </div>
  <div class="text-center mt-6">
    <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Ver más ofertas</button>
  </div>
</section>

<section class="container mx-auto px-6 py-20 flex flex-col lg:flex-row items-center justify-center gap-12">
  <div class="flex-shrink-0">
    <img src="./images/voyago.png" alt="Voyago" class="w-64 h-auto">
  </div>
  <div class="max-w-2xl text-center lg:text-left">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">¿Quiénes somos?</h2>
    <p class="text-gray-600 leading-relaxed text-justify">
      Somos una plataforma creada para acompañar y apoyar a quienes deciden explorar nuevas ciudades y culturas. Entendemos que viajar va más allá del simple desplazamiento: es una experiencia única que implica adaptarse, descubrir y conectar con lo que cada lugar tiene para ofrecer.
      <br>
      Desde la planificación de tu llegada hasta la instalación y la integración con la comunidad local, nuestro compromiso es facilitar cada paso para que tu experiencia sea memorable y sin complicaciones. Ofrecemos orientación en trámites, recomendaciones turísticas, actividades culturales y toda la información necesaria para que te sientas seguro y bienvenido.
      <br>
      Creemos en el poder del turismo como herramienta para unir personas, fomentar el intercambio cultural y enriquecer vidas. Por eso, no solo te ayudamos a llegar, sino que te invitamos a vivir el destino de una manera auténtica y cercana, construyendo recuerdos que durarán toda la vida.
      <br>
      Nuestra misión es ser ese puente entre culturas, apoyarte en cada etapa y celebrar contigo la aventura de descubrir el mundo.
    </p>
  </div>
</section>

<section class="relative bg-cover bg-center py-24 text-white" style="background-image: url('https://images.pexels.com/photos/32546824/pexels-photo-32546824.jpeg');">
  <div class="absolute inset-0 bg-black bg-opacity-60"></div>
  <div class="relative container mx-auto px-4">
    <h2 class="text-3xl font-bold mb-12">¿Qué hacemos?</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <!-- Card 1 -->
      <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 relative">
        <div class="absolute -top-6 left-6 bg-blue-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">A</div>
        <h3 class="text-lg font-semibold mt-6">Seguimiento digital</h3>
      </div>
      <!-- Card 2 -->
      <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 relative">
        <div class="absolute -top-6 left-6 bg-blue-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">A</div>
        <h3 class="text-lg font-semibold mt-6">Alojamiento y transporte</h3>
      </div>
      <!-- Card 3 -->
      <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 relative">
        <div class="absolute -top-6 left-6 bg-blue-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">A</div>
        <h3 class="text-lg font-semibold mt-6">Descubrimiento del país</h3>
      </div>
      <!-- Card 4 -->
      <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 relative">
        <div class="absolute -top-6 left-6 bg-blue-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">A</div>
        <h3 class="text-lg font-semibold mt-6">Integración con familias</h3>
      </div>
      <!-- Card 5 -->
      <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 relative">
        <div class="absolute -top-6 left-6 bg-blue-500 text-white rounded-full w-10 h-10 flex items-center justify-center font-bold">A</div>
        <h3 class="text-lg font-semibold mt-6">Instalación y trámites administrativos</h3>
      </div>
    </div>
  </div>
</section>

<section class="container mx-auto px-6 py-20 flex flex-col lg:flex-row items-center justify-center gap-12">
  <div class="flex-shrink-0">
    <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-blue-400">
      <img src="/images/img-pasaport.png" alt="Mujer feliz" class="w-full h-full object-cover">
    </div>
  </div>
  <div class="max-w-2xl text-center">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">¿Por qué nosotros?</h2>
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Voyago - Tu compañero de viaje</h2>
    <p class="text-gray-700 leading-relaxed mb-6">
      Voyago es una plataforma dedicada al turismo inteligente. Ofrecemos itinerarios personalizados, servicios de renta, información cultural y asistencia para que cada viaje sea una experiencia inolvidable. Explora las maravillas del mundo con simplicidad y seguridad.
    </p>
    <div class="mt-4">
      <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full shadow hover:bg-blue-700 transition">
        Conoce más
      </a>
    </div>
  </div>
</section>

<section class="max-w-6xl mx-auto px-4 py-16">
  <h2 class="text-3xl font-bold text-center mb-8">Explora el mundo con VoyaGo</h2>
  <div class="relative">
    <div id="carousel" class="overflow-x-auto flex space-x-6 snap-x snap-mandatory scroll-smooth no-scrollbar">
    </div>
    <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200 z-10">‹</button>
    <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow hover:bg-gray-200 z-10">›</button>
  </div>
</section>

<br><br>
<section
  class="relative h-64 bg-cover bg-center"
  style="background-image: url('https://images.unsplash.com/photo-1465256410760-10640339c72c?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8TWV4aWNvfGVufDB8fDB8fHww');">
  <!-- Overlay negro semitransparente -->
  <div class="absolute inset-0 bg-black bg-opacity-40"></div>

  <!-- Contenido -->
  <div class="absolute top-1/2 left-8 transform -translate-y-1/2 bg-yellow-300 p-4 rounded-lg shadow-lg max-w-sm relative z-10">
    <h2 class="text-xl font-bold mb-2">Ofertas en escapadas de verano</h2>
    <p class="text-sm mb-2">
      Encuentra ofertas de vuelo. Las noches de VoyaGo acumulan recompensas y están con tu membresía.
    </p>
    <button class="bg-black text-white px-4 py-2 text-sm rounded">Ver ofertas de vuelos</button>
  </div>
</section>
<div class="content-wrapper eva-3-container module-TextModule section section-12">
  <div class="bg-color-wrapper"><text>
      <div class="content-wrapper text-align-"><tag-text class="title-content">
          <h2 class="eva-3-h2 tag-text-heading">¿Cómo disfrutar al máximo tu próximo viaje?</h2>
        </tag-text><tag-text class="text-content">
          <p class="eva-3-body-1">
          <div>Ya sea una escapada breve, un viaje de negocios o esas merecidas vacaciones que tanto deseas, los&nbsp;<a href="https://www.bestday.com.mx/paquetes/" target="_blank" class="eva-3-link">paquetes de viajes</a>&nbsp;son la opción ideal para ti. Con los paquetes de VoyaGo accedes a precios accesibles ya que un paquete turístico ofrece un precio más económico que el que tendríamos contratando cada servicio por separado.</div>
          <div><br></div>
          <div>Cuantas más combinaciones realices, más barato será el costo total de tus vacaciones pudiendo utilizar el dinero ahorrado en el destino elegido. Por si fuera poco, puedes comprar tus paquetes con tarjetas de diferentes bancos, en muchos meses sin intereses y hasta puedes aprovechar beneficios exclusivos en múltiples destinos incluso en temporada alta.</div>
          <div><br></div>
          <div>Otros tips que te permitirán conseguir el&nbsp;<b class="-eva-3-bold">viaje más barato</b>&nbsp;son los siguientes:</div>
          <div><br></div>
          <div>
            <ul class="with-bullet">
              <li>Suscríbete al newsletter de VoyaGo para recibir ofertas exclusivas de&nbsp;<b class="-eva-3-bold">viajes</b>&nbsp;antes que los demás y aprovechar los precios más bajos.</li>
              <li>Planifica tus vacaciones en temporada baja. Esto reduce considerablemente el precio de tus vacaciones al igual que comprar tu viaje con al menos 6 meses de antelación.</li>
              <li>Ten 2 o 3 alternativas de destinos. De esta manera, tienes más posibilidades de encontrar ofertas que valen la pena.</li>
            </ul>
          </div>
          </p>
        </tag-text></div>
    </text></div>
</div>
<h2>¿Por qué reservar tus vacaciones en VoyaGo?</h2>

<section class="bg-white py-12 px-4">
  <h2 class="text-3xl font-bold text-center mb-10">¿Por qué reservar tus vacaciones en VoyaGo?</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

    <!-- Tarjeta 1 -->
    <div class="bg-yellow-100 rounded-2xl shadow-lg p-6 flex flex-col">
      <h3 class="text-xl font-semibold mb-4 text-yellow-800">Atención personalizada</h3>
      <p class="text-gray-700 text-sm leading-relaxed">
        En VoyaGo no eres un número más. Te guiamos paso a paso desde el primer clic hasta tu regreso a casa. Chatea con nosotros, agenda una videollamada o visítanos. Estamos aquí para ayudarte a planear el viaje perfecto.
      </p>
    </div>

    <!-- Tarjeta 2 -->
    <div class="bg-yellow-100 rounded-2xl shadow-lg p-6 flex flex-col">
      <h3 class="text-xl font-semibold mb-4 text-yellow-800">Paquetes hechos a tu medida</h3>
      <p class="text-gray-700 text-sm leading-relaxed">
        Vuelo, hotel, traslados, tours... tú eliges qué incluir. Armamos tu paquete ideal para que viajes sin estrés y con todo resuelto. Personaliza tu experiencia con solo unos clics y aprovecha nuestras ofertas especiales.
      </p>
    </div>

    <!-- Tarjeta 3 -->
    <div class="bg-yellow-100 rounded-2xl shadow-lg p-6 flex flex-col">
      <h3 class="text-xl font-semibold mb-4 text-yellow-800">Pagos flexibles</h3>
      <p class="text-gray-700 text-sm leading-relaxed">
        No dejes que el presupuesto limite tus planes. Reserva ahora y paga después con nuestras opciones a meses sin intereses. Además, tenemos promociones exclusivas cada semana para que viajes gastando menos.
      </p>
    </div>

    <!-- Tarjeta 4 -->
    <div class="bg-yellow-100 rounded-2xl shadow-lg p-6 flex flex-col">
      <h3 class="text-xl font-semibold mb-4 text-yellow-800">Destinos para todos los gustos</h3>
      <p class="text-gray-700 text-sm leading-relaxed">
        Ya sea que sueñes con la playa, una ciudad cosmopolita o un pueblo mágico, en VoyaGo lo hacemos realidad. Descubre destinos increíbles en México y el mundo, con recomendaciones pensadas para ti.
      </p>
    </div>

  </div>
</section>

<script>
  const data = [
    {
      place: 'Patagonia - Argentina',
      title: 'EL CHALTÉN',
      title2: 'Fitz Roy',
      description:
        "Nestled in the Patagonian Andes, El Chaltén is Argentina's trekking capital. Its trails lead adventurers to breathtaking views of Mount Fitz Roy and glacial lakes.",
      image: 'https://images.unsplash.com/photo-1596224302786-81bfc980b8ce',
    },
    {
      place: 'Iceland',
      title: 'JÖKULSÁRLÓN',
      title2: 'Glacial Lagoon',
      description:
        "This stunning glacial lagoon is filled with floating icebergs. Witness seals swimming and the dramatic beauty of Iceland's nature.",
      image: 'https://images.unsplash.com/photo-1502082553048-f009c37129b9',
    },
    {
      place: 'Norway',
      title: 'LOFOTEN',
      title2: 'Islands',
      description:
        "Dramatic peaks, Northern Lights, and picturesque villages make Lofoten a top destination for photography and exploration.",
      image: 'https://images.unsplash.com/photo-1505245208761-ba872912fac0',
    },
    {
      place: 'Vietnam',
      title: 'HA LONG',
      title2: 'Bay',
      description:
        "Ha Long Bay is famous for its emerald waters and limestone islands. Explore by boat and enjoy nature's beauty.",
      image: 'https://images.unsplash.com/photo-1518684079-b46c1141c18f',
    },
    {
      place: 'New Zealand',
      title: 'MILFORD',
      title2: 'Sound',
      description:
        "Towering cliffs and rainforests await you in this glacial fiord in New Zealand. A must-see for nature lovers.",
      image: 'https://images.unsplash.com/photo-1595433707802-5ffb43f7eb2a',
    },
    {
      place: 'Tanzania',
      title: 'SERENGETI',
      title2: 'National Park',
      description:
        "Witness the Great Migration and vast savannah landscapes teeming with wildlife in Serengeti National Park.",
      image: 'https://images.unsplash.com/photo-1563729784474-d77dbb933a9b',
    },
  ];

  const carouselContainer = document.getElementById('carousel');
  data.forEach((item) => {
    const card = document.createElement('div');
    card.className = 'min-w-[300px] max-w-xs bg-white rounded-xl shadow-md overflow-hidden snap-center';
    card.innerHTML = `
      <img src="${item.image}" class="w-full h-48 object-cover" alt="${item.title}">
      <div class="p-4">
        <p class="text-sm text-gray-500">${item.place}</p>
        <h3 class="text-xl font-bold">${item.title}</h3>
        <h4 class="text-lg font-semibold text-blue-700">${item.title2}</h4>
        <p class="text-sm mt-2 text-gray-700">${item.description}</p>
      </div>
    `;
    carouselContainer.appendChild(card);
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const hoy = new Date();
    const dia = hoy.getDay();
    const lunes = new Date(hoy);
    lunes.setDate(hoy.getDate() - ((dia + 6) % 7));
    const domingo = new Date(lunes);
    domingo.setDate(lunes.getDate() + 6);

    function formatFecha(date) {
      return date.toLocaleDateString('es-MX', {
        day: 'numeric',
        month: 'short'
      }).replace('.', '');
    }

    document.getElementById('fechas-vuelo').textContent = `${formatFecha(lunes)} al ${formatFecha(domingo)}`;
  });
</script>

<script>
const carousel = document.getElementById('carousel');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const card = carousel.querySelector('div');
const cardWidth = card.offsetWidth + 16;

let autoScroll = setInterval(() => {
  if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {
    carousel.scrollLeft = 0;
  } else {
    carousel.scrollBy({
      left: cardWidth * 1,
      behavior: 'smooth'
    });
  }
}, 3000);

prevBtn.addEventListener('click', () => {
  clearInterval(autoScroll);
  if (carousel.scrollLeft <= 0) {
    carousel.scrollLeft = carousel.scrollWidth;
  }
  carousel.scrollBy({
    left: -cardWidth * 1,
    behavior: 'smooth'
  });
  autoScroll = setInterval(() => {
    if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {
      carousel.scrollLeft = 0;
    } else {
      carousel.scrollBy({
        left: cardWidth * 1,
        behavior: 'smooth'
      });
    }
  }, 3000);
});

nextBtn.addEventListener('click', () => {
  clearInterval(autoScroll);
  if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {
    carousel.scrollLeft = 0;
  }
  carousel.scrollBy({
    left: cardWidth * 1,
    behavior: 'smooth'
  });
  autoScroll = setInterval(() => {
    if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth) {
      carousel.scrollLeft = 0;
    } else {
      carousel.scrollBy({
        left: cardWidth * 1,
        behavior: 'smooth'
      });
    }
  }, 3000);
});
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Activar Flatpickr en el campo fechas con rango
  flatpickr("#fechas", {
    mode: "range",
    dateFormat: "d M Y",
    minDate: "today",
    locale: {
      firstDayOfWeek: 1
    }
  });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('searchForm');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const destino = document.getElementById('destino').value;
    const fechas = document.getElementById('fechas').value;
    const huespedes = document.getElementById('huespedes').value;
    const vuelo = form.querySelector('input[name="vuelo"]').checked ? 1 : 0;
    const auto = form.querySelector('input[name="auto"]').checked ? 1 : 0;
    // Redirigir a /busqueda con los parámetros
    const params = new URLSearchParams({
      destino,
      fechas,
      huespedes,
      vuelo,
      auto
    });
    window.location.href = `/busqueda?${params.toString()}`;
  });
});
</script>
@endsection
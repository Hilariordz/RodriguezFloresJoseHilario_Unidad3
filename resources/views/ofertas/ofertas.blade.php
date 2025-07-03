@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<!-- Tarjetas superiores -->
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 max-w-7xl mx-auto p-6 bg-gray-100">
    <div class="bg-white rounded-xl shadow hover:scale-105 transition">
       <img src="/images/Oferta 1.jpg" alt="Oferta 1" class="w-full h-auto rounded-t-xl">
    </div>
    <div class="bg-white rounded-xl shadow hover:scale-105 transition">
       <img src="/images/Oferta 2.jpg" alt="Oferta 1" class="w-full h-auto rounded-t-xl">
    </div>
    <div class="bg-white rounded-xl shadow hover:scale-105 transition">
       <img src="/images/Oferta 3.jpg" alt="Oferta 1" class="w-full h-auto rounded-t-xl">
    </div>
    <div class="bg-white rounded-xl shadow hover:scale-105 transition">
        <img src="/images/Oferta 4.jpg" alt="Oferta 1" class="w-full h-auto rounded-t-xl">
    </div>
</div>

<!-- Banner extendido -->
<div class="max-w-7xl mx-auto px-6 mt-6">
    <img src="/images/Oferta 5.jpg" class="rounded-xl shadow-md w-full">
</div>

<!-- Texto final con íconos -->
<div class="bg-[#1d336a] text-white mt-8 rounded-xl p-6 max-w-7xl mx-auto text-center">
    <h4 class="text-xl font-semibold mb-4">Arma tu viaje a medida, contáctanos y recibe asesoría personalizada</h4>

    <div class="flex justify-center flex-wrap gap-6 mt-6">
        <!-- Teléfono -->
        <div class="flex flex-col items-center group">
            <div class="bg-white text-[#1d336a] p-4 rounded-full transition-transform duration-300 group-hover:scale-110 group-hover:bg-[#2563eb] group-hover:text-white shadow-lg">
                <!-- Heroicon: Phone -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h2.28a2 2 0 011.94 1.515l.518 2.072a2 2 0 01-.45 1.958l-1.27 1.27a16.001 16.001 0 006.586 6.586l1.27-1.27a2 2 0 011.958-.45l2.072.518A2 2 0 0121 18.72V21a2 2 0 01-2 2h-1C9.163 23 1 14.837 1 5V4a2 2 0 012-2z" />
                </svg>
            </div>
            <span class="mt-2 text-sm">Teléfono</span>
        </div>

        <!-- WhatsApp -->
        <div class="flex flex-col items-center group">
            <div class="bg-white text-[#1d336a] p-4 rounded-full transition-transform duration-300 group-hover:scale-110 group-hover:bg-[#22c55e] group-hover:text-white shadow-lg">
                <!-- Heroicon: Chat Bubble Left Ellipsis (simula WhatsApp) -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8a9.77 9.77 0 01-4-.8l-4 1 1-4A8.96 8.96 0 013 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
            </div>
            <span class="mt-2 text-sm">WhatsApp</span>
        </div>

        <!-- Videollamada -->
        <div class="flex flex-col items-center group">
            <div class="bg-white text-[#1d336a] p-4 rounded-full transition-transform duration-300 group-hover:scale-110 group-hover:bg-[#f59e42] group-hover:text-white shadow-lg">
                <!-- Heroicon: Video Camera -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14m0-4v4m0-4H5a2 2 0 00-2 2v2m0-4v6a2 2 0 002 2h10a2 2 0 002-2v-2" />
                </svg>
            </div>
            <span class="mt-2 text-sm">Videollamada</span>
        </div>

        <!-- Sucursales -->
        <div class="flex flex-col items-center group">
            <div class="bg-white text-[#1d336a] p-4 rounded-full transition-transform duration-300 group-hover:scale-110 group-hover:bg-[#eab308] group-hover:text-white shadow-lg">
                <!-- Heroicon: Map Pin -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a9 9 0 00-9 9c0 5.25 9 13 9 13s9-7.75 9-13a9 9 0 00-9-9z" />
                </svg>
            </div>
            <span class="mt-2 text-sm">Sucursales</span>
        </div>
    </div>

    <p class="text-sm opacity-80 mt-6">* Aplican términos y condiciones. Las imágenes son ilustrativas.</p>
</div>

<!-- Texto legal -->
<div class="max-w-5xl mx-auto mt-8 px-6 text-center">
    <h5 class="text-lg font-semibold mb-4 text-gray-800">Términos y condiciones</h5>
    <p class="text-sm text-gray-700 leading-relaxed">
        Viajes hasta 65% de descuento. Tarifas expresadas en pesos mexicanos. Descuentos de hasta 65% en hoteles y de hasta 60% en paquetes (vuelo más hotel). El descuento correspondiente ya está aplicado en el precio de la oferta, es decir, los precios mostrados en cada caja promocional ya son los finales. Sobre los meses sin intereses, éstos dependerán de la tarjeta con la que se realice la compra y se muestran hasta el final de la misma, es decir, en el check out. Lo invitamos a consultar las condiciones aplicables a cada servicio turístico previo a procesar su compra.
        Ofertas de alojamientos y paquetes: Ver categoría de alojamiento por habitación estándar por noche en base doble. Descuentos calculados con base en tarifas habituales, vigentes en períodos fuera de la promoción. Tarifas no reembolsables, ni endosables, no acumulables con otras promociones, no se permiten cambios de fecha y los precios están sujetos a disponibilidad y a cambios con base a restricciones y políticas de cada proveedor de servicio, los cuales son informados en el sitio web. Para más información y detalle consulte nuestro sitio web y términos y condiciones generales.
    </p>
</div>
@endsection

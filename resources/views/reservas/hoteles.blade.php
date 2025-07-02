@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<section>
    <section class="max-w-6xl mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold mb-8 text-center">Promociones irresistibles en hoteles internacionales</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1744217429986-71b7ebd72b42?q=80&w=1036&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Nueva York" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Nueva York</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 15 Jul - 22 Jul</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 120 por noche</p>
                    <a href="https://example.com/hotel-newyork" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1664985335522-8c00b5c9dae6?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en París" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en París</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 01 Ago - 10 Ago</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 150 por noche</p>
                    <a href="https://example.com/hotel-paris" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1685540256938-f02082efaa25?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Tokio" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Tokio</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 05 Sep - 15 Sep</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 180 por noche</p>
                    <a href="https://example.com/hotel-tokyo" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1663942465119-ee610f7d5675?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Londres" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Londres</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 20 Jul - 30 Jul</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 140 por noche</p>
                    <a href="https://example.com/hotel-london" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1692339721113-fc5d158629f6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Sídney" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Sídney</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 10 Oct - 20 Oct</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 200 por noche</p>
                    <a href="https://example.com/hotel-sydney" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://plus.unsplash.com/premium_photo-1677620677448-1f9b34369c93?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Roma" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Roma</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 12 Sep - 18 Sep</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 130 por noche</p>
                    <a href="https://example.com/hotel-rome" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://plus.unsplash.com/premium_photo-1694475185526-1f5118ccfe65?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Dubái" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Dubái</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 22 Ago - 29 Ago</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 220 por noche</p>
                    <a href="https://example.com/hotel-dubai" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1735053142242-cd2fd4579e16?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Berlín" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Berlín</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 05 Nov - 12 Nov</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 110 por noche</p>
                    <a href="https://example.com/hotel-berlin" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1727079586096-5278670ab910?q=80&w=987&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Bali" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Bali</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 18 Sep - 28 Sep</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 190 por noche</p>
                    <a href="https://example.com/hotel-bali" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1543775224-483704519120?q=80&w=1093&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Imagen 1" alt="Hotel en Ciudad del Cabo" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Ciudad del Cabo</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 25 Oct - 05 Nov</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 210 por noche</p>
                    <a href="https://example.com/hotel-cape-town" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1651987089530-1a9a0d7dcd06?q=80&w=1035&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Hotel en Moscú" class="w-full h-72 object-cover">
                <div class="p-5">
                    <h3 class="text-xl font-semibold mb-1">Hotel en Moscú</h3>
                    <p class="text-sm text-gray-500 mb-3">Estadía: 10 Dic - 20 Dic</p>
                    <p class="text-blue-600 font-bold text-lg mb-4">USD$ 160 por noche</p>
                    <a href="https://example.com/hotel-moscow" target="_blank" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Ver hotel
                    </a>
                </div>
            </div>

        </div>
    </section>
</section>
@endsection
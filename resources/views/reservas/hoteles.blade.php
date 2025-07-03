@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<style>
    .btn-zoom {
        transition: transform 0.3s ease;
    }

    .btn-zoom:hover {
        transform: scale(1.05);
    }
</style>

<section class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold mb-8 text-center">Promociones irresistibles en hoteles internacionales</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @php
        $hoteles = [
            ['nombre' => 'Hotel en Nueva York', 'fecha' => '15 Jul - 22 Jul', 'precio' => 'USD$ 120 por noche', 'link' => 'https://example.com/hotel-newyork', 'imagen' => 'https://images.unsplash.com/photo-1744217429986-71b7ebd72b42?q=80&w=1036'],
            ['nombre' => 'Hotel en París', 'fecha' => '01 Ago - 10 Ago', 'precio' => 'USD$ 150 por noche', 'link' => 'https://example.com/hotel-paris', 'imagen' => 'https://images.unsplash.com/photo-1664985335522-8c00b5c9dae6?q=80&w=1074'],
            ['nombre' => 'Hotel en Tokio', 'fecha' => '05 Sep - 15 Sep', 'precio' => 'USD$ 180 por noche', 'link' => 'https://example.com/hotel-tokyo', 'imagen' => 'https://images.unsplash.com/photo-1685540256938-f02082efaa25?q=80&w=987'],
            ['nombre' => 'Hotel en Londres', 'fecha' => '20 Jul - 30 Jul', 'precio' => 'USD$ 140 por noche', 'link' => 'https://example.com/hotel-london', 'imagen' => 'https://images.unsplash.com/photo-1663942465119-ee610f7d5675?q=80&w=987'],
            ['nombre' => 'Hotel en Sídney', 'fecha' => '10 Oct - 20 Oct', 'precio' => 'USD$ 200 por noche', 'link' => 'https://example.com/hotel-sydney', 'imagen' => 'https://images.unsplash.com/photo-1692339721113-fc5d158629f6?q=80&w=1170'],
            ['nombre' => 'Hotel en Roma', 'fecha' => '12 Sep - 18 Sep', 'precio' => 'USD$ 130 por noche', 'link' => 'https://example.com/hotel-rome', 'imagen' => 'https://plus.unsplash.com/premium_photo-1677620677448-1f9b34369c93?q=80&w=987'],
            ['nombre' => 'Hotel en Dubái', 'fecha' => '22 Ago - 29 Ago', 'precio' => 'USD$ 220 por noche', 'link' => 'https://example.com/hotel-dubai', 'imagen' => 'https://plus.unsplash.com/premium_photo-1694475185526-1f5118ccfe65?q=80&w=987'],
            ['nombre' => 'Hotel en Berlín', 'fecha' => '05 Nov - 12 Nov', 'precio' => 'USD$ 110 por noche', 'link' => 'https://example.com/hotel-berlin', 'imagen' => 'https://images.unsplash.com/photo-1735053142242-cd2fd4579e16?q=80&w=1170'],
            ['nombre' => 'Hotel en Bali', 'fecha' => '18 Sep - 28 Sep', 'precio' => 'USD$ 190 por noche', 'link' => 'https://example.com/hotel-bali', 'imagen' => 'https://images.unsplash.com/photo-1727079586096-5278670ab910?q=80&w=987'],
            ['nombre' => 'Hotel en Ciudad del Cabo', 'fecha' => '25 Oct - 05 Nov', 'precio' => 'USD$ 210 por noche', 'link' => 'https://example.com/hotel-cape-town', 'imagen' => 'https://images.unsplash.com/photo-1543775224-483704519120?q=80&w=1093'],
            ['nombre' => 'Hotel en Moscú', 'fecha' => '10 Dic - 20 Dic', 'precio' => 'USD$ 160 por noche', 'link' => 'https://example.com/hotel-moscow', 'imagen' => 'https://images.unsplash.com/photo-1651987089530-1a9a0d7dcd06?q=80&w=1035'],
        ];
        @endphp

        @foreach ($hoteles as $hotel)
        <div class="scroll-fade bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition transform hover:scale-105">
            <img src="{{ $hotel['imagen'] }}" alt="{{ $hotel['nombre'] }}" class="w-full h-72 object-cover">
            <div class="p-5">
                <h3 class="text-xl font-semibold mb-1">{{ $hotel['nombre'] }}</h3>
                <p class="text-sm text-gray-500 mb-3">Estadía: {{ $hotel['fecha'] }}</p>
                <p class="text-blue-600 font-bold text-lg mb-4">{{ $hotel['precio'] }}</p>
                <a href="{{ $hotel['link'] }}" target="_blank" class="btn-zoom inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Ver hotel
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("opacity-100", "translate-y-0");
                }
            });
        });

        document.querySelectorAll(".scroll-fade").forEach(card => {
            card.classList.add("opacity-0", "translate-y-6", "transition", "duration-700");
            observer.observe(card);
        });
    });
</script>
@endsection

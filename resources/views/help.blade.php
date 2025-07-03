@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<!-- Hero/Buscador -->
<div class="bg-gradient-to-r from-blue-900 via-purple-800 to-yellow-400 text-white text-center py-12 shadow-lg">
    <h1 class="text-3xl md:text-4xl font-extrabold mb-4 drop-shadow-lg">¿Cómo podemos ayudarte?</h1>
    <div class="mt-6 flex justify-center">
        <input type="text" placeholder="Escribe una palabra sobre lo que buscas. Ej: Cancelación, cambios, cobros" class="w-full max-w-xl px-6 py-4 rounded-full shadow-lg text-gray-800 text-lg border-2 border-yellow-300 focus:outline-none focus:ring-2 focus:ring-yellow-400" />
    </div>
</div>

<!-- Categorías principales -->
<section class="py-12">
    <h2 class="text-center text-2xl font-bold mb-10 text-gray-800">Categorías más consultadas</h2>
    <div class="flex flex-wrap justify-center gap-8 max-w-6xl mx-auto px-4">
    @foreach ([
        [
            'title' => 'Mis Viajes', 
            'desc' => 'Encuentra todo lo que puedes hacer con tu reserva y tus incluidos.',
            'icon' => 'https://img.icons8.com/?size=100&id=PaCo6QTgzuJa&format=png&color=6b46c1' 
        ],
        [
            'title' => 'Facturación, devolución y dudas de cobro',
            'desc' => 'Resuelve todas tus consultas sobre tus pagos y tus comprobantes.',
            'icon' => 'https://img.icons8.com/?size=100&id=bTt3smOOX6M2&format=png&color=6b46c1'
        ],
        [
            'title' => 'Cambios y cancelaciones',
            'desc' => 'Conoce cómo hacer cambios en tu reserva y todo lo que necesitas saber sobre cancelaciones.',
            'icon' => 'https://img.icons8.com/?size=100&id=CVz99DmZNngE&format=png&color=6b46c1'
        ],
        [
            'title' => 'Equipaje, asientos y check-in',
            'desc' => 'Realiza el web check-in, selecciona tus asientos y checa el equipaje para tu viaje.',
            'icon' => 'https://img.icons8.com/?size=100&id=hGBywG41r8zg&format=png&color=6b46c1'
        ],
    ] as $item)
        <div class="bg-white p-8 rounded-3xl shadow-xl hover:shadow-2xl transition-shadow text-center cursor-pointer w-full sm:w-[45%] lg:w-[22%] border-2 border-purple-100 hover:border-yellow-400 group">
            <div class="mb-5 p-3 flex justify-center">
                <img src="{{ $item['icon'] }}" alt="{{ $item['title'] }} icon" class="mx-auto h-16 w-16 group-hover:scale-110 transition-transform" />
            </div>
            <h3 class="text-xl font-bold text-purple-800 group-hover:text-yellow-500">{{ $item['title'] }}</h3>
            <p class="text-base text-gray-600 mt-3">{{ $item['desc'] }}</p>
        </div>
    @endforeach
    </div>
</section>

<!-- Categorías secundarias y modales -->
<section class="bg-gradient-to-br from-purple-50 via-yellow-50 to-blue-50 py-12">
    <h2 class="text-center text-2xl font-bold text-gray-800 mb-8">¿Todavía no encontraste lo que estás buscando?</h2>
    <p class="text-center mb-8 text-base text-gray-600">Chequea el resto de las categorías:</p>
    <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4">
        @foreach ([
            [
                'title' => 'Mi Reserva',
                'icon' => 'https://img.icons8.com/ios-filled/50/6b46c1/reservation.png',
                'desc' => 'Consulta, modifica o cancela tu reserva actual de manera rápida y segura.',
                'extra' => '<ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                            <li>Ver detalles de tu reserva</li>
                            <li>Modificar fechas o pasajeros</li>
                            <li>Solicitar reembolsos</li>
                        </ul>'
            ],
            [
                'title' => 'Formas de pago, precios e impuestos',
                'icon' => 'https://img.icons8.com/ios-filled/50/6b46c1/money.png',
                'desc' => 'Entérate de todos los métodos de pago disponibles y cómo se calculan los precios.',
                'extra' => '<ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                            <li>Tarjetas de crédito y débito aceptadas</li>
                            <li>Pagos a meses sin intereses</li>
                            <li>Impuestos y tasas explicadas</li>
                        </ul>'
            ],
            [
                'title' => 'Dudas generales sobre los productos de VOYAGO',
                'icon' => 'https://img.icons8.com/ios-filled/50/6b46c1/help.png',
                'desc' => 'Resuelve tus inquietudes sobre vuelos, hoteles, paquetes y más.',
                'extra' => '<ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                            <li>Políticas de cancelación</li>
                            <li>Información sobre paquetes armados</li>
                            <li>Diferencias entre productos</li>
                        </ul>'
            ],
            [
                'title' => 'Avisos importantes',
                'icon' => 'https://img.icons8.com/?size=100&id=lZuBDO8EDYtY&format=png&color=6b46c1',
                'desc' => 'Mantente informado sobre restricciones de viaje, alertas sanitarias y actualizaciones.',
                'extra' => '<p class="text-sm text-gray-600 mt-2">Incluye información sobre:</p>
                        <ul class="list-disc list-inside text-sm text-gray-600 mt-1">
                            <li>Requisitos por COVID-19</li>
                            <li>Alertas climáticas</li>
                            <li>Cambios de última hora</li>
                        </ul>'
            ],
            [
                'title' => 'Inconvenientes en destino',
                'icon' => 'https://img.icons8.com/?size=100&id=15W4ANjp5YMw&format=png&color=6b46c1',
                'desc' => '¿Tuviste un problema en el viaje? Te guiamos paso a paso para resolverlo.',
                'extra' => '<ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                            <li>Problemas con el alojamiento</li>
                            <li>Vuelos demorados o cancelados</li>
                            <li>Atención de emergencias</li>
                        </ul>'
            ],
            [
                'title' => 'Información útil para tu viaje',
                'icon' => 'https://img.icons8.com/ios-filled/50/6b46c1/info.png',
                'desc' => 'Consejos, checklist y datos importantes que no pueden faltarte antes de viajar.',
                'extra' => '<ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                            <li>Qué llevar en tu maleta</li>
                            <li>Documentación requerida</li>
                            <li>Moneda, clima y cultura</li>
                        </ul>'
            ],
            [
                'title' => 'Contacto',
                'icon' => 'https://img.icons8.com/ios-filled/50/6b46c1/phone.png',
                'desc' => '¿Aún con dudas? Estamos para ayudarte por los siguientes medios:',
                'extra' => '<ul class="list-disc list-inside text-sm text-gray-600 mt-2">
                            <li>Teléfono: 800-123-4567</li>
                            <li>Email: soporte@voyago.com</li>
                            <li>Chat en línea 24/7</li>
                        </ul>'
            ]
        ] as $index => $item)
            <div x-data="{ open: false }" class="flex h-full">
                <!-- Card -->
                <div @click="open = true" class="bg-white flex flex-col justify-between min-h-[180px] p-6 w-full rounded-2xl shadow-lg hover:shadow-2xl border-2 border-purple-100 hover:border-yellow-400 transition cursor-pointer group">
                    <div class="flex items-center gap-4">
                        <img src="{{ $item['icon'] }}" alt="{{ $item['title'] }} icon" class="h-10 w-10 group-hover:scale-110 transition-transform" />
                        <span class="text-purple-700 font-bold text-lg group-hover:text-yellow-500">{{ $item['title'] }}</span>
                    </div>
                    <div class="text-right mt-4">
                        <span class="text-yellow-400 text-2xl font-bold">&rarr;</span>
                    </div>
                </div>
                <!-- Modal -->
                <div x-show="open" x-transition class="fixed inset-0 flex items-center justify-center z-50">
                    <div class="absolute inset-0 bg-black/40 backdrop-blur"></div>
                    <div @click.away="open = false" class="relative bg-white rounded-3xl max-w-lg w-full p-8 shadow-2xl border-4 border-yellow-400 animate-fade-in">
                        <div class="flex items-center gap-4 mb-6">
                            <img src="{{ $item['icon'] }}" class="h-14 w-14" alt="{{ $item['title'] }} icon">
                            <h3 class="text-2xl font-extrabold text-purple-800">{{ $item['title'] }}</h3>
                        </div>
                        <p class="text-gray-700 mb-4 text-base">{{ $item['desc'] }}</p>
                        <div class="mb-4">{!! $item['extra'] !!}</div>
                        <div class="text-right mt-6">
                            <button @click="open = false" class="bg-gradient-to-r from-purple-700 to-yellow-400 text-white px-6 py-2 rounded-full font-bold shadow-lg hover:from-yellow-400 hover:to-purple-700 hover:text-purple-900 transition">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Suscripción/ofertas -->
<section class="py-12">
    <div class="max-w-xl mx-auto bg-gradient-to-r from-purple-700 via-blue-900 to-yellow-400 p-8 rounded-3xl shadow-2xl text-center">
        <h2 class="text-2xl font-bold mb-2 text-white drop-shadow">Ofertas exclusivas en tu email</h2>
        <p class="text-base mb-4 text-yellow-200">¡Ingresa tu email!</p>
        <form method="POST" action="#" class="flex flex-col sm:flex-row justify-center gap-3">
            @csrf
            <input type="email" name="email" placeholder="ejemplo@email.com" class="px-5 py-3 border-none rounded-full w-full sm:w-auto text-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-400" required />
            <button type="submit" class="bg-yellow-400 text-purple-900 px-8 py-3 rounded-full font-bold text-lg shadow-lg hover:bg-yellow-300 transition">¡Quiero recibirlas!</button>
        </form>
        <p class="text-xs text-white mt-3">Recibirás emails promocionales de Best Day. Para más información consulta la <a href="#" class="underline text-yellow-200">Aviso de privacidad</a>.</p>
    </div>
</section>

@endsection
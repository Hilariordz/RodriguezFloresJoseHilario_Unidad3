<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ayuda</title>
    <script src="https://cdn.tailwindcss.com"></script>
     <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="bg-gray-100 font-sans">

<nav x-data="{ open: false }" class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">

            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('images/Voyago.png') }}" alt="Voyago Logo" class="h-10 w-auto">
            </a>
            <button @click="open = !open" class="md:hidden text-gray-600 focus:outline-none">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <ul class="hidden md:flex items-center gap-6 text-gray-700 font-medium">
                <li><a href="{{ url('/') }}" class="hover:text-yellow-500">Inicio</a></li>
                <li><a href="{{ url('/destinos') }}" class="hover:text-yellow-500">Destinos</a></li>
                <li><a href="{{ url('/reservas') }}" class="hover:text-yellow-500">Reservas</a></li>
                <li><a href="{{ url('/ofertas') }}" class="hover:text-yellow-500">Ofertas</a></li>
                <li><a href="{{ url('/galeria') }}" class="hover:text-yellow-500">Galería</a></li>
                <li><a href="{{ url('/contacto') }}" class="hover:text-yellow-500">Contacto y Sugerencias</a></li>
                @guest
                <li>
                    <a href="{{ route('login') }}"
                        class="px-4 py-1 border-2 border-yellow-400 text-yellow-500 rounded-full hover:bg-yellow-100 transition">
                        Iniciar sesión
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}"
                        class="px-4 py-1 border-2 border-green-400 text-green-600 rounded-full hover:bg-green-100 transition">
                        Registrarse
                    </a>
                </li>
                @else
                <li class="font-bold text-yellow-600">{{ Auth::user()->name }}</li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-blue-600 hover:text-red-500 font-semibold">Cerrar sesión</button>
                    </form>
                </li>
                @endguest
            </ul>
        </div>
        <div x-show="open" x-cloak @click.away="open = false"
            class="md:hidden px-4 pb-4 space-y-2 text-gray-700 font-medium">

            <a href="{{ url('/') }}" @click="open = false" class="block hover:text-yellow-500">Inicio</a>
            <a href="{{ url('/destinos') }}" @click="open = false" class="block hover:text-yellow-500">Destinos</a>
            <a href="{{ url('/reservas') }}" @click="open = false" class="block hover:text-yellow-500">Reservas</a>
            <a href="{{ url('/ofertas') }}" @click="open = false" class="block hover:text-yellow-500">Ofertas</a>
            <a href="{{ url('/galeria') }}" @click="open = false" class="block hover:text-yellow-500">Galería</a>
            <a href="{{ url('/contacto') }}" @click="open = false" class="block hover:text-yellow-500">Contacto</a>

            @guest
            <a href="{{ route('login') }}"
                class="block border-2 border-yellow-400 text-yellow-500 rounded-full px-4 py-2 text-center hover:bg-yellow-100 transition">
                Iniciar sesión
            </a>
            <a href="{{ route('register') }}"
                class="block border-2 border-green-400 text-green-600 rounded-full px-4 py-2 text-center hover:bg-green-100 transition">
                Registrarse
            </a>
            @else
            <div class="font-bold text-yellow-600">{{ Auth::user()->name }}</div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-blue-600 hover:text-red-500 font-semibold">Cerrar sesión</button>
            </form>
            @endguest
        </div>
    </nav>

<div class="bg-blue-900 text-white text-center py-6">
    <h1 class="text-xl font-bold">¿Cómo podemos ayudarte?</h1>
    <div class="mt-4">
        <input
            type="text"
            placeholder="Escribe una palabra sobre lo que buscas. Ej: Cancelación, cambios, cobros"
            class="w-3/4 max-w-xl px-4 py-2 rounded shadow-sm text-gray-800"
        />
    </div>
</div>

<section class="py-10">
    <h2 class="text-center text-xl font-semibold mb-8 text-gray-800">Categorías más consultadas</h2>
    <div class="flex flex-wrap justify-center gap-6 max-w-6xl mx-auto px-4">
    @foreach ([
        [
            'title' => 'Mis Viajes', 
            'desc' => 'Encuentra todo lo que puedes hacer con tu reserva y tus incluidos.',
            'icon' => 'https://img.icons8.com/?size=100&id=PaCo6QTgzuJa&format=png&color=000000' 
        ],
        [
            'title' => 'Facturación, devolución y dudas de cobro',
            'desc' => 'Resuelve todas tus consultas sobre tus pagos y tus comprobantes.',
            'icon' => 'https://img.icons8.com/?size=100&id=bTt3smOOX6M2&format=png&color=000000'
        ],
        [
            'title' => 'Cambios y cancelaciones',
            'desc' => 'Conoce cómo hacer cambios en tu reserva y todo lo que necesitas saber sobre cancelaciones.',
            'icon' => 'https://img.icons8.com/?size=100&id=CVz99DmZNngE&format=png&color=000000'
        ],
        [
            'title' => 'Equipaje, asientos y check-in',
            'desc' => 'Realiza el web check-in, selecciona tus asientos y checa el equipaje para tu viaje.',
            'icon' => 'https://img.icons8.com/?size=100&id=hGBywG41r8zg&format=png&color=000000'
        ],
    ] as $item)
        <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition-shadow text-center cursor-pointer w-full sm:w-[45%] lg:w-[22%]">
            <div class="mb-4 p-3">
                <img src="{{ $item['icon'] }}" alt="{{ $item['title'] }} icon" class="mx-auto h-12 w-12" />
            </div>
            <h3 class="text-lg font-semibold text-gray-800">{{ $item['title'] }}</h3>
            <p class="text-sm text-gray-600 mt-2">{{ $item['desc'] }}</p>
        </div>
    @endforeach
</div>


</section>

<section x-data="{}" class="bg-gray-200 py-10">
    <h2 class="text-center text-lg font-semibold text-gray-800 mb-6">
        ¿Todavía no encontraste lo que estás buscando?
    </h2>
    <p class="text-center mb-6 text-sm text-gray-600">
        Chequea el resto de las categorías:
    </p>

    <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 px-4">
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
                'icon' => 'https://img.icons8.com/?size=100&id=lZuBDO8EDYtY&format=png&color=000000',
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
                'icon' => 'https://img.icons8.com/?size=100&id=15W4ANjp5YMw&format=png&color=000000',
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
                <!-- Card con altura mínima uniforme -->
                <div @click="open = true" class="bg-white flex flex-col justify-between min-h-[160px] p-4 w-full rounded shadow hover:shadow-lg transition cursor-pointer">
                    <div class="flex items-center gap-3">
                        <img src="{{ $item['icon'] }}" alt="{{ $item['title'] }} icon" class="h-8 w-8" />
                        <span class="text-purple-700 font-medium">{{ $item['title'] }}</span>
                    </div>
                    <div class="text-right mt-4">
                        <span class="text-gray-400 text-xl">&rarr;</span>
                    </div>
                </div>

                <!-- Modal -->
                <div x-show="open" x-transition class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">
                    <div @click.away="open = false" class="bg-white rounded-lg max-w-md w-full p-6 shadow-xl">
                        <div class="flex items-center gap-3 mb-4">
                            <img src="{{ $item['icon'] }}" class="h-10 w-10" alt="{{ $item['title'] }} icon">
                            <h3 class="text-xl font-semibold text-purple-700">{{ $item['title'] }}</h3>
                        </div>
                        <p class="text-gray-700 mb-2">{{ $item['desc'] }}</p>
                        {!! $item['extra'] !!}
                        <div class="text-right mt-6">
                            <button @click="open = false" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700 transition">
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>


<section class="py-10">
    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow text-center">
        <h2 class="text-lg font-semibold mb-2 text-purple-700">Ofertas exclusivas en tu email</h2>
        <p class="text-sm mb-4 text-gray-600">¡Ingresa tu email!</p>
        <form method="POST" action="#" class="flex flex-col sm:flex-row justify-center gap-2">
            @csrf
            <input type="email" name="email" placeholder="ejemplo@email.com" class="px-4 py-2 border rounded w-full sm:w-auto" required />
            <button type="submit" class="bg-blue-900 text-white px-6 py-2 rounded">¡Quiero recibirlas!</button>
        </form>
        <p class="text-xs text-gray-500 mt-2">Recibirás emails promocionales de Best Day. Para más información consulta la <a href="#" class="underline">Aviso de privacidad</a>.</p>
    </div>
</section>

<script>
  feather.replace()
</script>

</body>
</html>

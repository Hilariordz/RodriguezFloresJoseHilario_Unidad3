@include('layouts.nav-dashboard')

<div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 py-10">
    <div class="container mx-auto px-4">
        <div class="bg-white/90 rounded-xl shadow-lg p-8 mb-8 flex flex-col md:flex-row items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">¡Bienvenido, {{ Auth::user()->name }}!</h1>
                <p class="text-gray-600">Gestiona y cotiza tus viajes de manera sencilla y elegante.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <a href="#cotizar" class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded-lg shadow transition">Cotizar Viaje</a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Cotizar Viaje -->
            <div id="cotizar" class="bg-white/90 rounded-lg shadow-md p-6 flex flex-col">
                <h2 class="text-xl font-semibold text-blue-800 mb-4">Cotizar un Viaje</h2>
                <form id="cotizarForm">
                    @csrf
                    <div class="mb-3">
                        <label class="block text-gray-700 mb-1">Destino</label>
                        <input name="destino" type="text" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 mb-1">Fecha de salida</label>
                        <input name="fecha_salida" type="date" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 mb-1">Fecha de regreso</label>
                        <input name="fecha_regreso" type="date" class="w-full border border-gray-300 rounded px-3 py-2" required>
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 mb-1">Personas</label>
                        <input name="personas" type="number" min="1" class="w-full border border-gray-300 rounded px-3 py-2" value="1" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 rounded-lg mt-2 transition">Cotizar</button>
                </form>
                <div id="cotizacionResult"></div>
            </div>

            <!-- Viajes Guardados -->
            <div class="bg-white/90 rounded-lg shadow-md p-6 flex flex-col">
                <h2 class="text-xl font-semibold text-yellow-700 mb-4">Tus Viajes Guardados</h2>
                <ul class="divide-y divide-gray-200">
                    @if(isset($es_nuevo) && $es_nuevo)
                        {{-- No mostrar mensaje, solo el apartado vacío --}}
                    @else
                        @forelse($viajes as $viaje)
                            <li class="py-2 flex items-center justify-between">
                                <span>{{ $viaje->destino }}</span>
                                <div>
                                    <a href="{{ route('viajes.show', $viaje->id) }}" class="text-blue-700 hover:underline">Ver detalles</a>
                                    <form action="{{ route('viajes.destroy', $viaje->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600 hover:underline" onclick="return confirm('¿Eliminar este viaje?')">Eliminar</button>
                                    </form>
                                </div>
                            </li>
                        @empty
                            <li>No tienes viajes guardados.</li>
                        @endforelse
                    @endif
                </ul>
                <div class="mt-4 text-right">
                    <a href="#" class="text-blue-700 hover:underline">Ver todos</a>
                </div>
            </div>

            <!-- Reservaciones y Viajes Pasados -->
            <div class="bg-white/90 rounded-lg shadow-md p-6 flex flex-col">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Reservaciones y Viajes Pasados</h2>
                <ul class="divide-y divide-gray-200">
                    @if(isset($es_nuevo) && $es_nuevo)
                        {{-- No mostrar mensaje, solo el apartado vacío --}}
                    @else
                        @forelse($reservaciones as $res)
                            <li class="py-2 flex items-center justify-between">
                                <span>{{ $res->destino }} - {{ \Carbon\Carbon::parse($res->fecha_regreso)->format('d/m/Y') }}</span>
                                <a href="{{ route('viajes.show', $res->id) }}" class="text-blue-700 hover:underline">Ver recibo</a>
                            </li>
                        @empty
                            <li>No tienes reservaciones pasadas.</li>
                        @endforelse
                    @endif
                </ul>
                <div class="mt-4 text-right">
                    <a href="#" class="text-blue-700 hover:underline">Ver historial completo</a>
                </div>
            </div>
        </div>

        <div class="mt-12 flex flex-col md:flex-row gap-6">
            <div class="flex-1 bg-white/90 rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">¿Necesitas ayuda?</h3>
                <p class="text-gray-600 mb-2">Contacta a nuestro equipo de soporte para cualquier duda o inconveniente.</p>
                <a href="{{ route('contacto') }}" class="bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-4 rounded-lg transition">Contactar Soporte</a>
            </div>
            <div class="flex-1 bg-white/90 rounded-lg shadow-md p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Tu Perfil</h3>
                <p class="text-gray-600 mb-2">Actualiza tu información personal y preferencias.</p>
                <a href="{{ route('profile.edit') }}" class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-lg transition">Editar Perfil</a>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('cotizarForm').addEventListener('submit', function(e) {
    e.preventDefault();
    let form = e.target;
    let data = new FormData(form);

    fetch('{{ route('viajes.cotizar') }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: data
    })
    .then(res => res.json())
    .then(res => {
        document.getElementById('cotizacionResult').innerHTML = `
            <div class="mt-4 p-4 bg-green-100 rounded">
                <p><strong>Destino:</strong> ${res.cotizacion.destino}</p>
                <p><strong>Fechas:</strong> ${res.cotizacion.fecha_salida} a ${res.cotizacion.fecha_regreso}</p>
                <p><strong>Personas:</strong> ${res.cotizacion.personas}</p>
                <p><strong>Precio estimado:</strong> $${res.precio} MXN</p>
                <form method="POST" action="{{ route('viajes.guardar') }}">
                    @csrf
                    <input type="hidden" name="destino" value="${res.cotizacion.destino}">
                    <input type="hidden" name="fecha_salida" value="${res.cotizacion.fecha_salida}">
                    <input type="hidden" name="fecha_regreso" value="${res.cotizacion.fecha_regreso}">
                    <input type="hidden" name="personas" value="${res.cotizacion.personas}">
                    <input type="hidden" name="precio" value="${res.precio}">
                    <button type="submit" class="mt-2 bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-4 rounded">Guardar Viaje</button>
                </form>
            </div>
        `;
    });
});
</script>

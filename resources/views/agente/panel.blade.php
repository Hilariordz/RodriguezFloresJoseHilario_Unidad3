<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Agente de Viajes</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('images/Voyagoico.ico') }}" type="image/x-icon">
</head>
<body class="bg-gray-100 min-h-screen">
    @include('layouts.nav-agente')

    <div class="max-w-7xl mx-auto py-8 px-4 space-y-10">
        {{-- 1. Dashboard principal --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <svg class="w-8 h-8 text-blue-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <div class="text-2xl font-bold text-gray-800">12</div>
                <div class="text-gray-500 text-sm">Reservas Activas</div>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <svg class="w-8 h-8 text-yellow-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <div class="text-2xl font-bold text-gray-800">3</div>
                <div class="text-gray-500 text-sm">Solicitudes Pendientes</div>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <svg class="w-8 h-8 text-green-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                <div class="text-2xl font-bold text-gray-800">7</div>
                <div class="text-gray-500 text-sm">Clientes Hoy</div>
            </div>
            <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <svg class="w-8 h-8 text-red-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 8v.01"/></svg>
                <div class="text-2xl font-bold text-gray-800">1</div>
                <div class="text-gray-500 text-sm">Alertas</div>
            </div>
        </div>

        {{-- 2. Gestión de clientes --}}
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold text-gray-800">Clientes</h2>
                <input type="text" placeholder="Buscar cliente..." class="border rounded px-3 py-1 text-sm">
            </div>
            <table class="min-w-full text-sm">
                <thead>
                    <tr class="bg-gray-50 text-gray-600">
                        <th class="py-2 px-3 text-left">Nombre</th>
                        <th class="py-2 px-3 text-left">Email</th>
                        <th class="py-2 px-3 text-left">Teléfono</th>
                        <th class="py-2 px-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-3">Juan Pérez</td>
                        <td class="py-2 px-3">juan@email.com</td>
                        <td class="py-2 px-3">555-1234</td>
                        <td class="py-2 px-3">
                            <a href="{{ route('agente.clientes.index') }}" class="text-blue-600 hover:underline">Ver historial</a>
                        </td>
                    </tr>
                    <!-- Más filas -->
                </tbody>
            </table>
        </div>

        {{-- 3. Buscador avanzado --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Buscador Avanzado</h2>
            <form class="grid grid-cols-1 md:grid-cols-6 gap-4">
                <input type="text" placeholder="Origen" class="border rounded px-3 py-2">
                <input type="text" placeholder="Destino" class="border rounded px-3 py-2">
                <input type="date" class="border rounded px-3 py-2">
                <select class="border rounded px-3 py-2">
                    <option>Económica</option>
                    <option>Ejecutiva</option>
                </select>
                <input type="number" placeholder="Presupuesto" class="border rounded px-3 py-2">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Buscar</button>
            </form>
        </div>

        {{-- 4. Panel de gestión de reservas --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Reservas</h2>
            <table class="min-w-full text-sm">
                <thead>
                    <tr class="bg-gray-50 text-gray-600">
                        <th class="py-2 px-3 text-left">Cliente</th>
                        <th class="py-2 px-3 text-left">Estado</th>
                        <th class="py-2 px-3"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-3">Ana López</td>
                        <td class="py-2 px-3"><span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Activa</span></td>
                        <td class="py-2 px-3 flex gap-2">
                            <a href="#" class="text-blue-600 hover:underline">Editar</a>
                            <a href="#" class="text-red-600 hover:underline">Cancelar</a>
                            <a href="#" class="text-gray-600 hover:underline">Enviar confirmación</a>
                        </td>
                    </tr>
                    <!-- Más filas -->
                </tbody>
            </table>
        </div>

        {{-- 5. Formulario de itinerario personalizado --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Nuevo Itinerario</h2>
            <form class="space-y-4">
                <select class="border rounded px-3 py-2 w-full">
                    <option>Selecciona destino</option>
                    <!-- Opciones dinámicas -->
                </select>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="Hotel" class="border rounded px-3 py-2">
                    <input type="text" placeholder="Vuelo" class="border rounded px-3 py-2">
                </div>
                <input type="text" placeholder="Tours" class="border rounded px-3 py-2 w-full">
                <div class="flex items-center gap-4">
                    <label><input type="checkbox" class="mr-2">Transporte</label>
                    <label><input type="checkbox" class="mr-2">Seguro</label>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Guardar paquete</button>
            </form>
        </div>

        {{-- 6. Panel de comunicación --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Chat con Clientes</h2>
                <div class="h-40 bg-gray-50 rounded p-2 overflow-y-auto text-gray-600 text-sm">[Chat simulado]</div>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">Notificaciones</h2>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li>✈️ Cambio de vuelo para cliente Juan</li>
                    <li>🎉 Nueva promoción disponible</li>
                </ul>
                <div class="flex gap-4 mt-4">
                    <a href="https://wa.me/" target="_blank" class="text-green-600 hover:underline">WhatsApp</a>
                    <a href="mailto:cliente@email.com" class="text-blue-600 hover:underline">Correo</a>
                </div>
            </div>
        </div>

        {{-- 7. Calendario --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Calendario</h2>
            <div class="h-64 bg-gray-50 rounded flex items-center justify-center text-gray-400">[Calendario aquí]</div>
        </div>

        {{-- 8. Estadísticas de ventas --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Estadísticas de Ventas</h2>
            <div class="h-48 flex items-center justify-center text-gray-400">[Gráfico de barras/pastel aquí]</div>
        </div>

        {{-- 9. Gestión de comisiones --}}
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Comisiones</h2>
            <table class="min-w-full text-sm">
                <thead>
                    <tr class="bg-gray-50 text-gray-600">
                        <th class="py-2 px-3 text-left">Reserva</th>
                        <th class="py-2 px-3 text-left">Monto</th>
                        <th class="py-2 px-3 text-left">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-3">#1234</td>
                        <td class="py-2 px-3">$500</td>
                        <td class="py-2 px-3"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Pendiente</span></td>
                    </tr>
                    <!-- Más filas -->
                </tbody>
            </table>
        </div>

        {{-- 10. Exportar itinerario --}}
        <div class="flex justify-end">
            <a href="#" onclick="alert('Funcionalidad de exportar PDF próximamente')" class="bg-gray-800 text-white px-6 py-2 rounded shadow hover:bg-gray-900 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Exportar Itinerario PDF
            </a>
        </div>
    </div>
</body>
</html> 
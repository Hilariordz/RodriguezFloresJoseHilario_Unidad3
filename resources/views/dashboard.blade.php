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
                <form>
                    <div class="mb-3">
                        <label class="block text-gray-700 mb-1">Destino</label>
                        <input type="text" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Ej. Cancún, París...">
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 mb-1">Fecha de salida</label>
                        <input type="date" class="w-full border border-gray-300 rounded px-3 py-2">
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 mb-1">Fecha de regreso</label>
                        <input type="date" class="w-full border border-gray-300 rounded px-3 py-2">
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 mb-1">Personas</label>
                        <input type="number" min="1" class="w-full border border-gray-300 rounded px-3 py-2" value="1">
                    </div>
                    <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 rounded-lg mt-2 transition">Cotizar</button>
                </form>
            </div>

            <!-- Viajes Guardados -->
            <div class="bg-white/90 rounded-lg shadow-md p-6 flex flex-col">
                <h2 class="text-xl font-semibold text-yellow-700 mb-4">Tus Viajes Guardados</h2>
                <ul class="divide-y divide-gray-200">
                    <!-- Ejemplo de viaje guardado -->
                    <li class="py-2 flex items-center justify-between">
                        <span>París, Francia</span>
                        <button class="text-blue-700 hover:underline">Ver detalles</button>
                    </li>
                    <li class="py-2 flex items-center justify-between">
                        <span>Tokio, Japón</span>
                        <button class="text-blue-700 hover:underline">Ver detalles</button>
                    </li>
                    <!-- Aquí se mostrarán los viajes guardados dinámicamente -->
                </ul>
                <div class="mt-4 text-right">
                    <a href="#" class="text-blue-700 hover:underline">Ver todos</a>
                </div>
            </div>

            <!-- Reservaciones y Viajes Pasados -->
            <div class="bg-white/90 rounded-lg shadow-md p-6 flex flex-col">
                <h2 class="text-xl font-semibold text-green-700 mb-4">Reservaciones y Viajes Pasados</h2>
                <ul class="divide-y divide-gray-200">
                    <!-- Ejemplo de reservación pasada -->
                    <li class="py-2 flex items-center justify-between">
                        <span>Madrid, España - 12/05/2024</span>
                        <button class="text-blue-700 hover:underline">Ver recibo</button>
                    </li>
                    <li class="py-2 flex items-center justify-between">
                        <span>Riviera Maya - 20/03/2024</span>
                        <button class="text-blue-700 hover:underline">Ver recibo</button>
                    </li>
                    <!-- Aquí se mostrarán las reservaciones dinámicamente -->
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

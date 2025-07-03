@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

    <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 200)" x-show="show"
         x-transition:enter="transition ease-out duration-700"
         x-transition:enter-start="opacity-0 translate-y-10 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-2 gap-10 bg-white rounded-3xl shadow-2xl mt-8">
        <form method="POST" action="{{ route('contacto.enviar') }}" class="space-y-6">
            @csrf
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Contáctanos o deja tu sugerencia / queja</h2>

            <div>
                <label for="nombre" class="block mb-1 font-medium text-gray-700">Nombre completo</label>
                <input type="text" name="nombre" id="nombre" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 shadow-sm transition-all duration-200" />
            </div>

            <div>
                <label for="email" class="block mb-1 font-medium text-gray-700">Correo electrónico</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 shadow-sm transition-all duration-200" />
            </div>
            <label>Tipo de mensaje:</label>
            <select name="tipo" required>
                <option value="">Selecciona</option>
                <option value="consulta">Consulta</option>
                <option value="sugerencia">Sugerencia</option>
                <option value="queja">Queja</option>
            </select>

            <div>
                <label for="mensaje" class="block mb-1 font-medium text-gray-700">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="5" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-2xl resize-none focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-yellow-400 shadow-sm transition-all duration-200"></textarea>
            </div>

            <button type="submit"
                class="px-6 py-3 bg-gradient-to-r from-yellow-400 to-yellow-500 hover:from-yellow-500 hover:to-yellow-400 text-white rounded-full font-semibold shadow-lg hover:shadow-2xl transform hover:-translate-y-1 hover:scale-105 transition-all duration-300">
                Enviar
            </button>
        </form>

        <!-- Datos de contacto a la derecha -->
        <div class="flex flex-col items-center justify-center space-y-6 p-8 bg-yellow-50 rounded-3xl shadow-xl border border-yellow-200">
            <img src="{{ asset('images/Voyago.png') }}" alt="Voyago Logo" class="h-28 w-auto" />

            <div class="text-gray-700 text-center space-y-4 max-w-xs">
                <h3 class="text-xl font-semibold">Conéctate con nosotros</h3>
                <p>Para soporte o cualquier duda, envíanos un correo a:</p>
                <p>
                    <a href="mailto:support@hotmail.com" class="text-yellow-600 hover:text-yellow-800 underline">support@voyago.com</a>
                </p>
                <p>O llámanos al: <br>
                    8442898419</p>
                <div>
                    <h4 class="font-semibold">Sucursal Ramos Arizpe</h4>
                    <address class="not-italic text-sm leading-relaxed">
                        Blvd. Plan de Guadalupe 950, Zona Centro<br />
                        Ramos Arizpe, Coahuila 25900<br />
                        México
                    </address>
                </div>

                <div>
                    <h4 class="font-semibold">Sucursal Monterrey</h4>
                    <address class="not-italic text-sm leading-relaxed">
                        Av. Ignacio Morones Prieto 2800, Piso 3<br />
                        Monterrey, Nuevo León 64750<br />
                        México
                    </address>
                </div>
            </div>
        </div>
    </div>
<br>
<br> 
<br>
@endsection
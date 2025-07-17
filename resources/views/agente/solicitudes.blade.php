@include('layouts.nav-agente')

<div class="min-h-screen bg-gradient-to-br from-blue-900 via-indigo-900 to-purple-900 py-10">
    <div class="container mx-auto px-4">
        <div class="bg-white/90 rounded-xl shadow-lg p-8 mb-8 flex flex-col md:flex-row items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Solicitudes de Ayuda</h1>
                <p class="text-gray-600">Gestiona y responde las solicitudes de los usuarios.</p>
            </div>
            <div>
                <a href="{{ route('agente.dashboard') }}" class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded-lg shadow transition">Volver al Panel de Agente</a>
            </div>
        </div>
        <div class="bg-white/80 rounded-xl shadow-lg p-6">
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Usuario</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mensaje</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Respuesta</th>
                        <th class="px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($solicitudes as $solicitud)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $solicitud->usuario->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $solicitud->mensaje }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ ucfirst($solicitud->estado) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $solicitud->respuesta ?? '-' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($solicitud->estado == 'pendiente')
                                <form method="POST" action="{{ route('agente.solicitudes.responder', $solicitud->id) }}">
                                    @csrf
                                    <input type="text" name="respuesta" class="border rounded px-2 py-1" placeholder="Responder..." required>
                                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded">Responder</button>
                                </form>
                                @else
                                    <span class="text-green-700 font-semibold">Atendida</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 
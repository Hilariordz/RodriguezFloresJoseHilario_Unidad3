@extends('layouts.admin')

@section('content')
<div class="py-12 bg-gray-100 min-h-screen">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-lg rounded-lg p-8 mb-8">
            <h1 class="text-3xl font-bold mb-6 text-gray-800 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                Destinos registrados
            </h1>
            <!-- Formulario para crear destino -->
            <form action="{{ route('admin.destinos.crear') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-5 gap-4 items-end">
                @csrf
                <div>
                    <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-1">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:ring-2 focus:ring-green-400" required>
                </div>
                <div>
                    <label for="descripcion" class="block text-sm font-semibold text-gray-700 mb-1">Descripción</label>
                    <input type="text" name="descripcion" id="descripcion" class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:ring-2 focus:ring-green-400">
                </div>
                <div>
                    <label for="precio" class="block text-sm font-semibold text-gray-700 mb-1">Precio</label>
                    <input type="number" name="precio" id="precio" class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:ring-2 focus:ring-green-400" step="0.01" required>
                </div>
                <div>
                    <label for="personas" class="block text-sm font-semibold text-gray-700 mb-1">Personas</label>
                    <input type="number" name="personas" id="personas" class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:ring-2 focus:ring-green-400" min="1" value="1" required>
                </div>
                <div>
                    <label for="imagen" class="block text-sm font-semibold text-gray-700 mb-1">Imagen</label>
                    <input type="file" name="imagen" id="imagen" class="border border-gray-300 rounded-lg px-3 py-2 w-full bg-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100" accept="image/*">
                </div>
                <div>
                    <button type="submit" class="w-full px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg transition">Crear destino</button>
                </div>
            </form>
        </div>
        <!-- Cards de destinos -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($destinos as $destino)
            <div class="bg-white rounded-xl shadow-md p-6 flex flex-col justify-between border border-gray-100 hover:shadow-xl transition">
                @if($destino->imagen)
                    <img src="{{ asset('storage/' . $destino->imagen) }}" alt="Imagen de {{ $destino->nombre }}" class="w-full h-40 object-cover rounded-lg mb-4 border">
                @else
                    <div class="w-full h-40 flex items-center justify-center bg-gray-100 rounded-lg mb-4 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a4 4 0 004 4h10a4 4 0 004-4V7a4 4 0 00-4-4H7a4 4 0 00-4 4z" /></svg>
                    </div>
                @endif
                <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $destino->nombre }}</h2>
                <p class="text-gray-600 mb-2">{{ $destino->descripcion }}</p>
                <p class="text-green-700 font-semibold text-lg mb-2">${{ number_format($destino->precio, 2) }}</p>
                <div class="flex items-center gap-2 text-sm text-gray-700 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87m6 0A4 4 0 005 15.13M15 11a4 4 0 10-8 0 4 4 0 008 0zm6 8v-2a4 4 0 00-3-3.87" /></svg>
                    <span>{{ $destino->personas }} persona{{ $destino->personas > 1 ? 's' : '' }}</span>
                </div>
                <div class="flex gap-2 mt-4">
                    <a href="{{ route('admin.destinos.editar', $destino) }}" class="flex-1 px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white font-semibold rounded-lg text-center transition">Editar</a>
                    <form action="{{ route('admin.destinos.eliminar', $destino) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este destino?');" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full px-3 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg transition">Eliminar</button>
                    </form>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500 py-12">
                No hay destinos registrados aún.
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection 
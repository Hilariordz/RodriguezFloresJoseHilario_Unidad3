@extends('layouts.admin')

@section('content')
<div class="py-12">
    <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-4">Editar destino</h1>
                <form action="{{ route('admin.destinos.actualizar', $destino) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="nombre" class="block text-sm font-medium">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="border rounded px-2 py-1 w-full" value="{{ old('nombre', $destino->nombre) }}" required>
                    </div>
                    <div>
                        <label for="descripcion" class="block text-sm font-medium">Descripción</label>
                        <input type="text" name="descripcion" id="descripcion" class="border rounded px-2 py-1 w-full" value="{{ old('descripcion', $destino->descripcion) }}">
                    </div>
                    <div>
                        <label for="precio" class="block text-sm font-medium">Precio</label>
                        <input type="number" name="precio" id="precio" class="border rounded px-2 py-1 w-full" step="0.01" value="{{ old('precio', $destino->precio) }}" required>
                    </div>
                    <button type="submit" class="px-4 py-2 bg-yellow-500 text-white rounded">Actualizar destino</button>
                    <a href="{{ route('admin.destinos') }}" class="ml-4 text-gray-600 hover:underline">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 
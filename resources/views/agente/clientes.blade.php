@extends('layouts.app')
@section('content')
<div class="max-w-5xl mx-auto py-8">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-gray-800">Clientes</h2>
        <a href="{{ route('agente.clientes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Nuevo Cliente</a>
    </div>
    @if(session('success'))
        <div class="mb-4 bg-green-100 text-green-800 px-4 py-2 rounded">{{ session('success') }}</div>
    @endif
    <form method="GET" class="mb-4 flex gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Buscar cliente..." class="border rounded px-3 py-1 text-sm">
        <button class="bg-gray-200 px-3 py-1 rounded text-gray-700">Buscar</button>
    </form>
    <table class="min-w-full text-sm bg-white rounded shadow">
        <thead>
            <tr class="bg-gray-50 text-gray-600">
                <th class="py-2 px-3 text-left">Nombre</th>
                <th class="py-2 px-3 text-left">Email</th>
                <th class="py-2 px-3 text-left">Teléfono</th>
                <th class="py-2 px-3 text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
            <tr class="border-b">
                <td class="py-2 px-3">{{ $cliente->name }}</td>
                <td class="py-2 px-3">{{ $cliente->email }}</td>
                <td class="py-2 px-3">{{ $cliente->telefono }}</td>
                <td class="py-2 px-3 text-center flex gap-2 justify-center">
                    <a href="{{ route('agente.clientes.edit', $cliente) }}" class="text-blue-600 hover:underline">Editar</a>
                    <form action="{{ route('agente.clientes.destroy', $cliente) }}" method="POST" onsubmit="return confirm('¿Eliminar este cliente?')">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                    </form>
                    <a href="{{ route('agente.clientes.historial', $cliente) }}" class="text-gray-600 hover:underline">Historial</a>
                </td>
            </tr>
            @empty
            <tr><td colspan="4" class="py-4 text-center text-gray-500">No hay clientes.</td></tr>
            @endforelse
        </tbody>
    </table>
    <div class="mt-4">{{ $clientes->links() }}</div>
</div>
@endsection 
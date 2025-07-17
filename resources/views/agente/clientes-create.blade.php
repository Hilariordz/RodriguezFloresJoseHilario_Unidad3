@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Nuevo Cliente</h2>
    <form method="POST" action="{{ route('agente.clientes.store') }}" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        <div>
            <label class="block text-gray-700">Nombre</label>
            <input type="text" name="name" value="{{ old('name') }}" class="border rounded px-3 py-2 w-full" required>
            @error('name')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="border rounded px-3 py-2 w-full" required>
            @error('email')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Teléfono</label>
            <input type="text" name="telefono" value="{{ old('telefono') }}" class="border rounded px-3 py-2 w-full">
            @error('telefono')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-gray-700">Contraseña</label>
            <input type="password" name="password" class="border rounded px-3 py-2 w-full" required>
            @error('password')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="flex justify-between items-center">
            <a href="{{ route('agente.clientes.index') }}" class="text-gray-600 hover:underline">Volver</a>
            <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Guardar</button>
        </div>
    </form>
</div>
@endsection 
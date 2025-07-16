@extends('layouts.admin')

@section('content')
<div class="py-12 bg-gradient-to-br from-gray-100 to-blue-100 min-h-screen">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-blue-100">
            <div class="p-8 text-gray-900">
                <div class="flex items-center justify-between mb-6">
                    <h1 class="text-3xl font-extrabold text-blue-800 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M16 3.13a4 4 0 010 7.75M8 3.13a4 4 0 000 7.75" /></svg>
                        Usuarios registrados
                    </h1>
                </div>
                <div class="overflow-x-auto rounded-lg">
                    <table class="min-w-full bg-white text-sm text-left">
                        <thead>
                            <tr class="bg-blue-50 text-blue-900 uppercase tracking-wider text-xs">
                                <th class="py-3 px-6 border-b font-semibold">ID</th>
                                <th class="py-3 px-6 border-b font-semibold">Nombre</th>
                                <th class="py-3 px-6 border-b font-semibold">Email</th>
                                <th class="py-3 px-6 border-b font-semibold">Rol</th>
                                <th class="py-3 px-6 border-b font-semibold">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr class="hover:bg-blue-50 transition-colors">
                                <td class="py-3 px-6 border-b">{{ $usuario->id }}</td>
                                <td class="py-3 px-6 border-b font-medium">{{ $usuario->name }}</td>
                                <td class="py-3 px-6 border-b">{{ $usuario->email }}</td>
                                <td class="py-3 px-6 border-b">
                                    <span class="inline-flex items-center px-2 py-1 rounded text-xs font-semibold
                                        @if($usuario->role=='admin') bg-blue-100 text-blue-700 @else bg-gray-100 text-gray-700 @endif">
                                        @if($usuario->role=='admin')
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 7v-6m0 0l-9-5m9 5l9-5" /></svg>
                                        @endif
                                        {{ ucfirst($usuario->role) }}
                                    </span>
                                </td>
                                <td class="py-3 px-6 border-b">
                                    @if($usuario->id !== auth()->id())
                                    <form action="{{ route('admin.usuarios.cambiarRol', $usuario) }}" method="POST" class="inline-flex items-center gap-2">
                                        @csrf
                                        @method('PATCH')
                                        <select name="role" class="border border-blue-200 rounded px-2 py-1 focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition">
                                            <option value="user" @if($usuario->role=='user') selected @endif>Usuario</option>
                                            <option value="admin" @if($usuario->role=='admin') selected @endif>Admin</option>
                                        </select>
                                        <button type="submit" class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded shadow transition font-semibold flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                                            Actualizar
                                        </button>
                                    </form>
                                    @else
                                    <span class="text-gray-400 italic text-xs">No disponible</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
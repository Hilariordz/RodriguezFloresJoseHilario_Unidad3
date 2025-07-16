@extends('layouts.admin')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-4">Panel de Administración</h1>
                <div class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-blue-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800">Usuarios registrados</h3>
                        <p class="text-3xl font-bold text-blue-900">{{ $estadisticas['usuarios'] ?? 0 }}</p>
                    </div>
                    <div class="bg-green-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-800">Destinos registrados</h3>
                        <p class="text-3xl font-bold text-green-900">{{ $estadisticas['destinos'] ?? 0 }}</p>
                    </div>
                    <div class="bg-purple-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-purple-800">Viajes registrados</h3>
                        <p class="text-3xl font-bold text-purple-900">Próximamente</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-blue-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800">Usuarios</h3>
                        <p class="text-blue-600">Gestionar usuarios del sistema</p>
                        <a href="{{ route('admin.usuarios') }}" class="text-blue-500 hover:underline">Ver usuarios →</a>
                    </div>
                    
                    <div class="bg-green-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-800">Destinos</h3>
                        <p class="text-green-600">Gestionar destinos turísticos</p>
                        <a href="{{ route('admin.destinos') }}" class="text-green-500 hover:underline">Ver destinos →</a>
                    </div>
                    
                    <div class="bg-purple-100 p-4 rounded-lg">
                        <h3 class="font-semibold text-purple-800">Estadísticas</h3>
                        <p class="text-purple-600">Ver estadísticas del sitio</p>
                        <a href="#" class="text-purple-500 hover:underline">Ver estadísticas →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
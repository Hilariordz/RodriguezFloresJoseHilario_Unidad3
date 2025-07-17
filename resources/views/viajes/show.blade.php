@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 py-10">
    <div class="container mx-auto px-4">
        <div class="bg-white/90 rounded-xl shadow-lg p-8 mb-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-4">Detalles del Viaje</h1>
            <div class="mb-4">
                <p><strong>Destino:</strong> {{ $viaje->destino }}</p>
                <p><strong>Fecha de salida:</strong> {{ \Carbon\Carbon::parse($viaje->fecha_salida)->format('d/m/Y') }}</p>
                <p><strong>Fecha de regreso:</strong> {{ \Carbon\Carbon::parse($viaje->fecha_regreso)->format('d/m/Y') }}</p>
                <p><strong>Personas:</strong> {{ $viaje->personas }}</p>
                <p><strong>Precio:</strong> ${{ number_format($viaje->precio, 2) }} MXN</p>
            </div>
            <a href="{{ route('dashboard') }}" class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded-lg transition">Volver al Dashboard</a>
        </div>
    </div>
</div>
@endsection 
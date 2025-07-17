@extends('layouts.app')
@section('content')
<div class="max-w-3xl mx-auto py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Historial de Viajes de {{ $cliente->name }}</h2>
    <a href="{{ route('agente.clientes.index') }}" class="text-gray-600 hover:underline mb-4 inline-block">Volver a clientes</a>
    <div class="bg-white rounded shadow p-6">
        @if($viajes->count())
            <table class="min-w-full text-sm">
                <thead>
                    <tr class="bg-gray-50 text-gray-600">
                        <th class="py-2 px-3 text-left">Destino</th>
                        <th class="py-2 px-3 text-left">Estado</th>
                        <th class="py-2 px-3 text-left">Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($viajes as $viaje)
                    <tr class="border-b">
                        <td class="py-2 px-3">{{ $viaje->nombre ?? '-' }}</td>
                        <td class="py-2 px-3">{{ ucfirst($viaje->estado) }}</td>
                        <td class="py-2 px-3">{{ $viaje->created_at->format('d/m/Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="text-gray-500">Este cliente no tiene viajes registrados.</div>
        @endif
    </div>
</div>
@endsection 
@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-4">
    <h1 class="text-3xl font-bold mb-4 text-blue-800">Atención al Cliente</h1>
    <p class="mb-6 text-gray-700">¿Tienes dudas, problemas o sugerencias? ¡Estamos para ayudarte!</p>
    <ul class="mb-8 space-y-2">
        <li><strong>Email:</strong> soporte@voyago.com</li>
        <li><strong>Teléfono:</strong> +52 55 1234 5678</li>
        <li><strong>Horario:</strong> Lunes a Viernes, 9:00 a 18:00</li>
    </ul>
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('solicitud.ayuda.enviar') }}" class="bg-white rounded shadow p-6 max-w-lg mx-auto mt-8">
        @csrf
        <label class="block mb-2 font-semibold text-gray-700">¿En qué podemos ayudarte?</label>
        <textarea name="mensaje" class="w-full border border-gray-300 rounded px-3 py-2 mb-4" rows="4" required></textarea>
        <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded">Enviar Solicitud</button>
    </form>
    <a href="{{ route('contacto') }}" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-900">Enviar mensaje</a>
</div>
@endsection 
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
    <a href="{{ route('contacto') }}" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-900">Enviar mensaje</a>
</div>
@endsection 
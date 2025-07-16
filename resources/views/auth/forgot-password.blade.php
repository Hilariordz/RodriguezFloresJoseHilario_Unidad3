<x-guest-layout>
  <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-sky-100 to-sky-300">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-gray-200">
      <div class="flex flex-col items-center mb-6">
        <!-- SVG de herramienta -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-sky-700 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536l-1.5 1.5a2.5 2.5 0 01-3.536-3.536l1.5-1.5zM9 11l-6 6a2 2 0 002.828 2.828l6-6m-2.828-2.828a4 4 0 105.656 5.656" />
        </svg>
        <a href="/">
          <img src="{{ url('./images/Voyago.png') }}" class="h-16 w-auto" alt="Voyago logo" />
        </a>
      </div>
      <h2 class="text-2xl font-semibold text-center text-sky-800 mb-4">¿Olvidaste tu contraseña?</h2>
      <p class="text-sm text-gray-600 text-center mb-6">
        Solo dinos tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña.
      </p>
      <x-auth-session-status class="mb-4" :status="session('status')" />
      <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-4">
          <x-input-label for="email" :value="__('Correo')" class="mb-1 text-sky-700" />
          <x-text-input id="email" 
                        class="block w-full rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 p-3 shadow-sm" 
                        type="email" name="email" :value="old('email')" required autofocus />
          <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
        </div>
        <div class="flex justify-end">
          <x-primary-button class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded-md transition-all">
            {{ __('Enviar enlace') }}
          </x-primary-button>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>

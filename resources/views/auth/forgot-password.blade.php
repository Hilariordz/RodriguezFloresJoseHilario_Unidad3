<x-guest-layout>
  <div class="flex justify-center mb-8">
    <a href="/">
      <img src="{{ url('./images/Voyago.png') }}" class="h-16 w-auto" alt="Voyago logo" />
    </a>
  </div>

  <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">
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
</x-guest-layout>

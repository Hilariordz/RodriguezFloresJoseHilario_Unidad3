<x-guest-layout>
  <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">Crear una cuenta</h2>

  <form method="POST" action="{{ route('register') }}" class="space-y-5">
    @csrf

    <!-- Nombre -->
    <div>
      <label for="name" class="block text-sm font-semibold">Nombre(s)</label>
      <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
             class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 shadow-sm">
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Correo -->
    <div>
      <label for="email" class="block text-sm font-semibold">Correo electrónico</label>
      <input id="email" name="email" type="email" value="{{ old('email') }}" required
             class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 shadow-sm">
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Contraseña -->
    <div>
      <label for="password" class="block text-sm font-semibold">Contraseña</label>
      <input id="password" name="password" type="password" required autocomplete="new-password"
             class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 shadow-sm">
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirmar contraseña -->
    <div>
      <label for="password_confirmation" class="block text-sm font-semibold">Confirmar contraseña</label>
      <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
             class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 shadow-sm">
      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <!-- Enlace y botón -->
    <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-6">
      <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">¿Ya tienes una cuenta?</a>
      <button type="submit"
              class="w-full md:w-auto bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-200">
        Registrarme
      </button>
    </div>
  </form>
</x-guest-layout>

<x-guest-layout>
  <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">Iniciar sesión</h2>

  <form method="POST" action="{{ route('login') }}" class="space-y-5">
    @csrf

    <!-- Correo -->
    <div>
      <label for="email" class="block text-sm font-semibold">Correo electrónico</label>
      <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus
             class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 shadow-sm" />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
  <label for="password" class="block text-sm font-semibold">Contraseña</label>
  <div class="relative">
    <input id="password" name="password" type="password" required
           class="mt-1 block w-full rounded-lg border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 p-2 shadow-sm pr-10" />

    <!-- Botón ojito -->
    <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-500">
      <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path id="eye-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
      </svg>
    </button>
  </div>
  <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

    <!-- Olvidaste tu contraseña -->
    <div class="text-right text-sm">
      <a href="{{ route('password.request') }}" class="text-indigo-600 hover:underline">¿Olvidaste tu contraseña?</a>
    </div>
    <div class="flex flex-col md:flex-row items-center justify-between gap-4 mt-6">
      <a href="{{ route('register') }}" class="text-sm text-indigo-600 hover:underline">¿No tienes una cuenta?</a>
      <button type="submit"
              class="w-full md:w-auto bg-indigo-600 text-white font-semibold py-2 px-6 rounded-lg hover:bg-indigo-700 transition duration-200">
        Iniciar sesión
      </button>
    </div>
  </form>

  <!-- Google reCAPTCHA para Login -->
  <script src="https://www.google.com/recaptcha/api.js?render=6LfQK1srAAAAAMXscM9bXkd8qHe8-b4MO4tACivQ"></script>
  <script>
    grecaptcha.ready(function () {
      grecaptcha.execute('6LfQK1srAAAAAMXscM9bXkd8qHe8-b4MO4tACivQ', { action: 'login' }).then(function (token) {
        let hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'recaptcha_token');
        hiddenInput.setAttribute('value', token);
        document.querySelector('form').appendChild(hiddenInput);
      });
    });
  </script>
  <script>
  function togglePassword() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eye-icon');

    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      eyeIcon.classList.add('text-indigo-600');
    } else {
      passwordInput.type = 'password';
      eyeIcon.classList.remove('text-indigo-600');
    }
  }
</script>
</x-guest-layout>

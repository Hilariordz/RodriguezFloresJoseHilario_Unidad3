<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Panel Admin | Voyago')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Navbar Admin -->
    <nav class="bg-white border-b border-gray-200 shadow-sm sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
            <div class="flex items-center gap-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 group">
                    <img src="{{ asset('images/voyago.png') }}" alt="Logo" class="h-10 w-auto rounded-md shadow group-hover:scale-105 transition">
                    <span class="text-xl font-bold text-gray-800 tracking-wide hidden sm:block">Admin Voyago</span>
                </a>
                <div class="hidden md:flex gap-2 ml-8">
                    <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-100 transition @if(request()->routeIs('admin.dashboard')) bg-gray-100 @endif">Panel</a>
                    <a href="{{ route('admin.usuarios') }}" class="px-4 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-100 transition @if(request()->routeIs('admin.usuarios')) bg-gray-100 @endif">Usuarios</a>
                    <a href="{{ route('admin.destinos') }}" class="px-4 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-100 transition @if(request()->routeIs('admin.destinos')) bg-gray-100 @endif">Destinos</a>
                    <a href="#" class="px-4 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-100 transition">Estadísticas</a>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <span class="hidden md:block font-medium text-gray-600">{{ Auth::user()->name }}</span>
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4000c7&color=fff&size=64" class="w-9 h-9 rounded-full border-2 border-gray-200 shadow" alt="Avatar">
                <form method="POST" action="{{ route('logout') }}" class="ml-2">
                    @csrf
                    <button type="submit" class="px-3 py-1 rounded-lg bg-gray-100 text-gray-700 font-semibold hover:bg-red-100 hover:text-red-600 transition">Cerrar sesión</button>
                </form>
            </div>
        </div>
        <!-- Responsive -->
        <div class="md:hidden px-4 pb-2 flex gap-2">
            <a href="{{ route('admin.dashboard') }}" class="flex-1 px-2 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-100 transition text-center @if(request()->routeIs('admin.dashboard')) bg-gray-100 @endif">Panel</a>
            <a href="{{ route('admin.usuarios') }}" class="flex-1 px-2 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-100 transition text-center @if(request()->routeIs('admin.usuarios')) bg-gray-100 @endif">Usuarios</a>
            <a href="{{ route('admin.destinos') }}" class="flex-1 px-2 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-100 transition text-center @if(request()->routeIs('admin.destinos')) bg-gray-100 @endif">Destinos</a>
            <a href="#" class="flex-1 px-2 py-2 rounded-lg text-gray-700 font-semibold hover:bg-gray-100 transition text-center">Estadísticas</a>
        </div>
    </nav>
    <main class="py-8">
        @yield('content')
    </main>
</body>
</html> 
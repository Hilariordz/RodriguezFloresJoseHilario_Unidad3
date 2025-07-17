<nav class="bg-gray-100 border-b border-gray-200 shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo y branding -->
            <div class="flex items-center gap-4">
                <a href="{{ route('agente.dashboard') }}" class="flex items-center group">
                    <img src="{{ asset('images/Voyago.png') }}" alt="Logo Voyago" class="h-10 w-auto rounded-md shadow-sm">
                    <div class="ml-3 hidden sm:block">
                        <span class="text-xl font-bold text-gray-800 tracking-wide">VOYAGO</span>
                        <div class="text-xs text-gray-500 font-medium">Centro de Agentes</div>
                    </div>
                </a>
            </div>
            <!-- Navegación principal -->
            <div class="hidden md:flex items-center gap-6">
                <a href="{{ route('agente.dashboard') }}" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 hover:text-blue-800 transition">Dashboard</a>
                <a href="{{ route('agente.solicitudes') }}" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 hover:text-blue-800 transition flex items-center gap-1">
                    Solicitudes
                    @if(\App\Models\SolicitudAyuda::where('estado', 'pendiente')->count() > 0)
                        <span class="bg-blue-800 text-white text-xs font-bold px-2 py-0.5 rounded-full ml-1">
                            {{ \App\Models\SolicitudAyuda::where('estado', 'pendiente')->count() }}
                        </span>
                    @endif
                </a>
                <a href="{{ route('agente.clientes.index') }}" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 hover:text-blue-800 transition">Clientes</a>
            </div>
            <!-- Panel derecho -->
            <div class="flex items-center gap-3">
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-xs font-bold">AGENTE</span>
                <!-- Menú de usuario -->
                <div class="relative" x-data="{ userMenu: false }">
                    <button @click="userMenu = !userMenu" class="flex items-center text-gray-700 font-semibold hover:text-blue-800 focus:outline-none">
                        <svg class="w-7 h-7 rounded-full bg-gray-200 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M6 20v-2a4 4 0 014-4h0a4 4 0 014 4v2"/>
                        </svg>
                        <span class="hidden md:block">{{ Auth::user()->name }}</span>
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="userMenu" @click.away="userMenu = false" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 z-50 border border-gray-200">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav> 
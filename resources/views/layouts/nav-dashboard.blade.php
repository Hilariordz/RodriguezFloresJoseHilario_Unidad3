<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.tailwindcss.com"></script>

<style>
    .nav-gradient {
        background: linear-gradient(90deg, #4000c7 0%, #0057e7 100%);
        box-shadow: 0 2px 16px rgba(64,0,199,0.08);
    }
    .nav-link-custom {
        color: #fff !important;
        font-weight: 500;
        padding: 8px 22px;
        border-radius: 999px;
        transition: background 0.2s, color 0.2s, box-shadow 0.2s;
    }
    .nav-link-custom:hover, .nav-link-custom[aria-current="page"] {
        background: rgba(255,255,255,0.18);
        color: #ffe600 !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .nav-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 8px rgba(64,0,199,0.10);
        margin-right: 10px;
    }
    .nav-dropdown {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 4px 24px rgba(64,0,199,0.13);
        min-width: 180px;
        padding: 10px 0;
        margin-top: 10px;
    }
    .nav-dropdown a, .nav-dropdown form button {
        color: #4000c7 !important;
        font-weight: 500;
        padding: 10px 24px;
        border-radius: 8px;
        display: block;
        transition: background 0.2s, color 0.2s;
        width: 100%;
        text-align: left;
        background: none;
        border: none;
    }
    .nav-dropdown a:hover, .nav-dropdown form button:hover {
        background: #e0e7ff;
        color: #0057e7 !important;
    }
    @media (max-width: 700px) {
        .nav-gradient { padding: 0 8px; }
    }
</style>

<nav x-data="{ open: false, menu: false }" class="bg-white shadow border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex items-center gap-6">
                <a href="{{ route('dashboard') }}" class="flex items-center group">
                    <img src="{{ asset('images/Voyago.png') }}" alt="Logo Voyago" class="h-10 w-auto rounded-lg shadow-md transition-transform group-hover:scale-105 group-hover:shadow-lg">
                    <span class="ml-3 text-xl font-bold text-gray-900 tracking-wide drop-shadow-sm hidden sm:block">Voyago</span>
                </a>
                <!-- Menú principal -->
                <div class="relative ml-6">
                    <button @click="menu = !menu" class="flex items-center text-gray-800 font-semibold hover:text-blue-700 focus:outline-none">
                        <span>Planea tu viaje</span>
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="menu" @click.away="menu = false" class="absolute left-0 mt-2 w-56 bg-white rounded-xl shadow-lg py-2 z-50">
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
                            <svg class="w-5 h-5 mr-2 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 10V21h18V10"/><path d="M9 21V6h6v15"/></svg>
                            Hospedaje
                        </a>
                        <a href="{{ route('reservas.vuelos') }}" class="flex items-center px-4 py-2 hover:bg-gray-100">
                            <svg class="w-5 h-5 mr-2 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M2.5 19.5L21.5 4.5"/><path d="M17 17l4 4m-4-4l-4-4"/></svg>
                            Vuelos
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
                            <svg class="w-5 h-5 mr-2 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="7" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                            Autos
                        </a>
                        <a href="{{ route('reservas.paquetes') }}" class="flex items-center px-4 py-2 hover:bg-gray-100">
                            <svg class="w-5 h-5 mr-2 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="7" width="18" height="13" rx="2"/><path d="M16 3v4M8 3v4"/></svg>
                            Paquetes
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">
                            <svg class="w-5 h-5 mr-2 text-blue-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>
                            Actividades
                        </a>
                        <div class="border-t my-2"></div>
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">Ofertas</a>
                        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100">Grupos y convenciones</a>
                    </div>
                </div>
            </div>
            <!-- Accesos rápidos -->
            <div class="flex items-center gap-4">
                <a href="#" class="text-gray-700 hover:text-blue-700 font-medium flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 3v18m9-9H3"/></svg>
                    Descargar la app
                </a>
                <div class="flex items-center gap-1 text-gray-700 font-medium">
                    <span>MXN</span>
                    <img src="https://flagcdn.com/mx.svg" alt="MX" class="w-5 h-5 rounded-full ml-1">
                </div>
                <a href="#" class="text-gray-700 hover:text-blue-700 font-medium">Anunciar una propiedad</a>
                <a href="#" class="text-gray-700 hover:text-blue-700 font-medium">Atención al cliente</a>
                <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-700 font-medium">Mis viajes</a>
                <!-- Usuario -->
                <div class="relative" x-data="{ userMenu: false }">
                    <button @click="userMenu = !userMenu" class="flex items-center text-gray-800 font-semibold hover:text-blue-700 focus:outline-none">
                        <svg class="w-7 h-7 rounded-full bg-gray-200 p-1 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M6 20v-2a4 4 0 014-4h0a4 4 0 014 4v2"/></svg>
                        <span class="hidden md:block">{{ Auth::user()->name }}</span>
                        <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="userMenu" @click.away="userMenu = false" class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg py-2 z-50">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Cerrar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Hamburger -->
            <div class="flex items-center sm:hidden ml-2">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:bg-gray-200 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-7 w-7" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white border-t border-gray-200 shadow-lg">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
            <a href="{{ route('reservas.vuelos') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Vuelos</a>
            <a href="{{ route('reservas.paquetes') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Paquetes</a>
        </div>
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4 flex items-center gap-3">
                <svg class="w-7 h-7 rounded-full bg-gray-200 p-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M6 20v-2a4 4 0 014-4h0a4 4 0 014 4v2"/></svg>
                <div>
                    <div class="font-medium text-base text-gray-900">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perfil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Cerrar sesión</button>
                </form>
            </div>
        </div>
    </div>
</nav>


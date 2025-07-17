@include('layouts.nav-dashboard')

<div class="min-h-screen bg-gradient-to-br from-green-90via-emerald-900 to-teal-9000iv class=container mx-auto px-4">
        <!-- Header elegante -->
        <div class=text-center mb-12>         <h1 class="text-5 font-bold mb-4gradient-to-r from-green-40-emerald-400 bg-clip-text text-transparent>               Mis Viajes Guardados
            </h1>
            <p class=text-xl text-green-200 max-w-2xl mx-auto>              Gestiona y organiza todos tus viajes planificados en un solo lugar
            </p>
        </div>

        <!-- Estadísticas rápidas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8>
            <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center>
                <div class=w-12g-blue-10unded-full mx-auto mb-3 flex items-center justify-center">
                    <svg class=w-6 h-6 text-blue-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d="M90l-5.4472072410 01316.38206181 1 011.447894L9 7m13l6m-637m6 104.5532276A1 10021 183827.61800-1447                   </svg>
                </div>
                <h3 class="text-white font-bold text-2>{{ $viajes->count() }}</h3
                <p class="text-green-20>Viajes Totales</p>
            </div>
            
            <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center>
                <div class="w-12h-12 bg-yellow-10unded-full mx-auto mb-3 flex items-center justify-center">
                    <svg class="w-6-6t-yellow-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d=M128v4l3m6                   </svg>
                </div>
                <h3 class="text-white font-bold text-2>{[object Object] $viajes->where(fecha_salida', >, now())->count() }}</h3
                <p class="text-green-200>Próximos Viajes</p>
            </div>
            
            <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center>
                <div class="w-12h-12 bg-purple-10unded-full mx-auto mb-3 flex items-center justify-center">
                    <svg class="w-6-6t-purple-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d=M128-1.65703 0.895321.343232 3 .895 32-13432-32-8c1.11 2.08.42 2.599M128V7m01v8m0 010-10.11                   </svg>
                </div>
                <h3 class="text-white font-bold text-2xl">${{ number_format($viajes->sum('precio')) }}</h3
                <p class="text-green-200>Inversión Total</p>
            </div>
        </div>

        <!-- Lista de viajes -->
        <div class="bg-white/95op-blur-sm rounded-2dow-2xl p-8 border border-white/20>
            <div class=flex items-center justify-between mb-6>
                <h2 class="text-2ont-bold text-gray-800 flex items-center">
                    <svg class=w-6 h-6r-3xt-green-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d="M90l-5.4472072410 01316.38206181 1 011.447894L9 7m13l6m-637m6 104.5532276A1 10021 183827.61800-1447                   </svg>
                    Viajes Guardados
                </h2
                <a href="{{ route('user.cotizar') }}" class="bg-gradient-to-r from-green-600o-emerald-600 hover:from-green-70over:to-emerald-70t-white font-semibold py-2nded-lg transition-all duration-300 flex items-center">
                    <svg class="w-44 mr-2" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d=M12 6v6m0                   </svg>
                    Nuevo Viaje
                </a>
            </div>

            @if($viajes->count() > 0
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($viajes as $viaje)
                        <div class=bg-gradient-to-br from-white to-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300border border-gray-200">
                            <div class="p-6">
                                <!-- Header de la tarjeta -->
                                <div class=flex items-center justify-between mb-4">
                                    <div class=flex items-center">
                                        <div class="w-10-10 bg-gradient-to-br from-blue-400o-purple-500 rounded-full flex items-center justify-center">
                                            <svg class="w-55text-white" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d=M17.657 16.65713.414 20H9a2 01-22v-4a2 2120.586l424340.2438801111.31411                   <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2d=M15 11a330 11030                   </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3ss="font-bold text-gray-800{{ $viaje->destino }}</h3>
                                            <p class=text-sm text-gray-600">{{ $viaje->personas }} persona(s)</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class=inline-flex items-center px-2.5y-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Guardado
                                        </span>
                                    </div>
                                </div>

                                <!-- Detalles del viaje -->
                                <div class=space-y-3 mb-4                   <div class=flex items-center text-sm text-gray-600">
                                        <svg class=w-4h-4mr-2 text-blue-500" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d="M8 7384V3m-9 80M5 21h14a220 002-2V7a22002                   </svg>
                                        Salida:[object Object]{ \Carbon\Carbon::parse($viaje->fecha_salida)->format('d/m/Y') }}
                                    </div>
                                    <div class=flex items-center text-sm text-gray-600">
                                        <svg class=w-4 h-4r-2xt-green-500" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d="M8 7384V3m-9 80M5 21h14a220 002-2V7a22002                   </svg>
                                        Regreso:[object Object]{ \Carbon\Carbon::parse($viaje->fecha_regreso)->format('d/m/Y') }}
                                    </div>
                                    <div class=flex items-center text-sm text-gray-600">
                                        <svg class=w-44 mr-2t-yellow-500" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d=M128-1.65703 0.895321.343232 3 .895 32-13432-32-8c1.11 2.08.42 2.599M128V7m01v8m0 010-10.11                   </svg>
                                        Precio: ${{ number_format($viaje->precio) }} MXN
                                    </div>
                                </div>

                                <!-- Botones de acción -->
                                <div class=flex space-x-2                   <a href="{{ route('viajes.show, $viaje->id) }}" 
                                       class="flex-1 bg-blue-600 hover:bg-blue-70-white text-center py-2-3rounded-lg text-sm font-medium transition-colors duration-200">
                                        Ver Detalles
                                    </a>
                                    <form action="{{ route('viajes.destroy, $viaje->id) }}" method="POST class=                   @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                onclick=return confirm('¿Estás seguro de que quieres eliminar este viaje?')"
                                                class=bg-red-600er:bg-red-70text-white py-2-3rounded-lg text-sm font-medium transition-colors duration-200">
                                            <svg class="w-4fill="none" stroke="currentColorviewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d="M19 7l-0.867 12142A2 2 0116.138 21H7.862a2 2 0 01-1.995-1.858L57m5 4v6m4-6v6m1-10V4a1 1 000-1-1h-4a110                   </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Estado vacío -->
                <div class=text-center py-12">
                    <div class="w-24 h-24 bg-green-10unded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12-12xt-green-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d="M90l-5.4472072410 01316.38206181 1 011.447894L9 7m13l6m-637m6 104.5532276A1 10021 183827.61800-1447                   </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-80b-2>No tienes viajes guardados</h3>
                    <p class=text-gray-6006ienza a planificar tu próxima aventura cotizando un viaje</p>
                    <a href="{{ route('user.cotizar') }}" class="bg-gradient-to-r from-green-600o-emerald-600 hover:from-green-70over:to-emerald-70t-white font-semibold py-3nded-lg transition-all duration-300 inline-flex items-center">
                        <svg class="w-55 mr-2" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin=roundstroke-width=2 d=M12 6v6m0                   </svg>
                        Cotizar mi Primer Viaje
                    </a>
                </div>
            @endif
        </div>
    </div>
</div> 
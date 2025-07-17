@include('layouts.nav-dashboard')

<div class="min-h-screen bg-gradient-to-br from-purple-900 via-indigo-900-blue-9000iv class=container mx-auto px-4">
        <!-- Header elegante -->
        <div class=text-center mb-12>         <h1 class="text-5 font-bold mb-4gradient-to-r from-purple-40indigo-400 bg-clip-text text-transparent>               Historial de Viajes
            </h1>
            <p class=text-xl text-purple-200 max-w-2xl mx-auto>              Revive tus mejores momentos y mantén un registro de todas tus aventuras
            </p>
        </div>

        <!-- Estadísticas rápidas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8>
            <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center>
                <div class=w-12urple-10unded-full mx-auto mb-3 flex items-center justify-center">
                    <svg class=w-6-6t-purple-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round stroke-linejoin=roundstroke-width=2=M90l-50.44720724101316382061811 0110.447894 73m-637104.55322761121183827.618                   </svg>
                </div>
                <h3 class="text-white font-bold text-2>{{ $reservaciones->count() }}</h3
                <p class="text-purple-20Viajes Completados</p>
            </div>
            
            <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center>
                <div class="w-1212 bg-indigo-10unded-full mx-auto mb-3 flex items-center justify-center">
                    <svg class=w-6-6t-indigo-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round stroke-linejoin=roundstroke-width=2 d=M128v4l3m6                   </svg>
                </div>
                <h3 class="text-white font-bold text-2xl">{{ $reservaciones->where(fecha_regreso, >, now()->subDays(30))->count() }}</h3
                <p class=text-purple-20es</p>
            </div>
            
            <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center>
                <div class=w-12h-12-blue-10unded-full mx-auto mb-3 flex items-center justify-center">
                    <svg class="w-6-6t-blue-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round stroke-linejoin=roundstroke-width=2 d=M128-16570300.8953210.3432323 .89532-13432-32-810.11 2.8.42 20.599M1287                   </svg>
                </div>
                <h3 class="text-white font-bold text-2xl">${{ number_format($reservaciones->sum(precioh3
                <p class="text-purple-200Total Gastado</p>
            </div>
        </div>

        <!-- Lista de viajes pasados -->
        <div class="bg-white/95op-blur-sm rounded-2dow-2xl p-8 border border-white/20>
            <div class=flex items-center justify-between mb-6
                <h2ss="text-2ont-bold text-gray-800 flex items-center">
                    <svg class=w-6-6t-purple-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                        <path stroke-linecap="round stroke-linejoin=roundstroke-width=2=M90l-50.44720724101316382061811 0110.447894 73m-637104.55322761121183827.618                   </svg>
                    Viajes Completados
                </h2
                <div class=flex space-x-2">
                    <button id="btnFiltroTodos class="bg-purple-600hover:bg-purple-70 px-4-2rounded-lg text-sm font-medium transition-colors duration-200">
                        Todos
                    </button>
                    <button id="btnFiltroRecientes" class=bg-gray-600r:bg-gray-70 px-4-2rounded-lg text-sm font-medium transition-colors duration-200">
                        Recientes
                    </button>
                </div>
            </div>

            @if($reservaciones->count() >0
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="viajesContainer">
                    @foreach($reservaciones as $res)
                        <div class=bg-gradient-to-br from-white to-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300border border-gray-200viaje-card data-fecha="{{ $res->fecha_regreso }}">
                            <div class="p-6">
                                <!-- Header de la tarjeta -->
                                <div class=flex items-center justify-between mb-4">
                                    <div class=flex items-center">
                                        <div class="w-10-10 bg-gradient-to-br from-purple-400o-indigo-500 rounded-full flex items-center justify-center">
                                            <svg class="w-55text-white" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                                <path stroke-linecap="round stroke-linejoin=roundstroke-width=2d=M170.657 160.65713.414 209a21-22v-4a21200.586l424340.2438801111                   <path stroke-linecap="round stroke-linejoin=roundstroke-width=2d=M15 11a330 11030                   </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3ss="font-bold text-gray-80$res->destino }}</h3>
                                            <p class=text-sm text-gray-600>{{ $res->personas }} persona(s)</p>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <span class=inline-flex items-center px-2.5y-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Completado
                                        </span>
                                    </div>
                                </div>

                                <!-- Detalles del viaje -->
                                <div class=space-y-3 mb-4                   <div class=flex items-center text-sm text-gray-600">
                                        <svg class=w-4-4-2t-purple-500" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round stroke-linejoin=roundstroke-width=2d=M8 7384m-980M5 2114a220 002-2V7a22002                   </svg>
                                        Salida:[object Object]{ \Carbon\Carbon::parse($res->fecha_salida)->format('d/m/Y') }}
                                    </div>
                                    <div class=flex items-center text-sm text-gray-600">
                                        <svg class=w-4-4t-indigo-500" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round stroke-linejoin=roundstroke-width=2d=M8 7384m-980M5 2114a220 002-2V7a22002                   </svg>
                                        Regreso:[object Object]{ \Carbon\Carbon::parse($res->fecha_regreso)->format('d/m/Y') }}
                                    </div>
                                    <div class=flex items-center text-sm text-gray-600">
                                        <svg class=w-44-2t-blue-500" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round stroke-linejoin=roundstroke-width=2 d=M128-16570300.8953210.3432323 .89532-13432-32-810.11 2.8.42 20.599M1287                   </svg>
                                        Precio: ${{ number_format($res->precio) }} MXN
                                    </div>
                                </div>

                                <!-- Botones de acción -->
                                <div class=flex space-x-2                   <a href="{{ route(viajes.show, $res->id) }}" 
                                       class=flex-1 bg-purple-600hover:bg-purple-70-white text-center py-2rounded-lg text-sm font-medium transition-colors duration-200">
                                        Ver Recibo
                                    </a>
                                    <button class=bg-gray-600-gray-70hite py-2rounded-lg text-sm font-medium transition-colors duration-200onclick="compartirViaje('{[object Object]$res->destino }}')">
                                        <svg class="w-4fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round stroke-linejoin=roundstroke-width=2 d="M80.6843.342C8.886 12.9389120.482920482-0.114-.938.316-1.342m0 2.684a3 3 110.684 2.6846.6323316m-6.632-6l6.632.316m0 0 3 0 105367-2684330 00-5367 2.684m0.316 3 0 1053672684330                   </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Estado vacío -->
                <div class=text-center py-12">
                    <div class="w-24 h-24 bg-purple-10unded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class=w-12t-purple-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round stroke-linejoin=roundstroke-width=2=M90l-50.44720724101316382061811 0110.447894 73m-637104.55322761121183827.618                   </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-802nes viajes completados</h3>
                    <p class=text-gray-606za a viajar y aquí aparecerá tu historial de aventuras</p>
                    <a href="{{ route('user.cotizar') }}" class="bg-gradient-to-r from-purple-600o-indigo-600 hover:from-purple-70over:to-indigo-70t-white font-semibold py-3nded-lg transition-all duration-300 inline-flex items-center">
                        <svg class=w-55 mr-2" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round stroke-linejoin=roundstroke-width=2 d=M12 6v6m0                   </svg>
                        Planificar Viaje
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

<script>
// Filtros para viajes
document.getElementById(btnFiltroTodos').addEventListener('click', function() {
    document.querySelectorAll('.viaje-card).forEach(card => {
        card.style.display =block';
    });
    this.className = 'bg-purple-600hover:bg-purple-70 px-4-2rounded-lg text-sm font-medium transition-colors duration-200ent.getElementById('btnFiltroRecientes).className = bg-gray-600r:bg-gray-70 px-4-2rounded-lg text-sm font-medium transition-colors duration-20ent.getElementById('btnFiltroRecientes').addEventListener('click', function() [object Object]
    const hace30Dias = new Date();
    hace30ias.setDate(hace30ias.getDate() - 30);
    
    document.querySelectorAll('.viaje-card).forEach(card => {
        const fechaViaje = new Date(card.dataset.fecha);
        if (fechaViaje >= hace30Dias) [object Object]        card.style.display = block';
        } else [object Object]        card.style.display = none';
        }
    });
    
    this.className = 'bg-purple-600hover:bg-purple-70 px-4-2rounded-lg text-sm font-medium transition-colors duration-200ent.getElementById(btnFiltroTodos).className = bg-gray-600r:bg-gray-70 px-4-2rounded-lg text-sm font-medium transition-colors duration-200;
});

// Función para compartir viaje
function compartirViaje(destino) {
    if (navigator.share) {
        navigator.share({
            title: 'Mi viaje a ' + destino,
            text: '¡Mira mi increíble viaje a ' + destino + '!,
            url: window.location.href
        });
    } else[object Object]       // Fallback para navegadores que no soportan Web Share API
        const textArea = document.createElement('textarea');
        textArea.value = '¡Mira mi increíble viaje a + destino + '! ' + window.location.href;
        document.body.appendChild(textArea);
        textArea.select();
        document.execCommand('copy');
        document.body.removeChild(textArea);
        alert('¡Enlace copiado al portapapeles!');
    }
}
</script> 
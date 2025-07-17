@include('layouts.nav-dashboard')

<div class="min-h-screen bg-gradient-to-br from-blue-900 via-purple-900 to-indigo-9000>
    <div class=container mx-auto px-4">
        <!-- Header elegante -->
        <div class=text-center mb-12>         <h1 class="text-5 font-bold mb-4gradient-to-r from-blue-400o-purple-400 bg-clip-text text-transparent>               Cotiza tu Viaje
            </h1>
            <p class=text-xl text-blue-200 max-w-2xl mx-auto>              Descubre destinos increíbles y obtén las mejores ofertas para tu próxima aventura
            </p>
        </div>

        <!-- Formulario principal -->
        <div class=max-w-4xl mx-auto">
            <div class="bg-white/95op-blur-sm rounded-2dow-2xl p-8 border border-white/20>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Formulario de cotización -->
                    <div class="space-y-6">
                        <h2 class="text-2ont-bold text-gray-800 flex items-center">
                            <svg class=w-6h-6mr-3 text-blue-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="roundstroke-width="2 d="M9 20l-5.44720.724A110 013 16.3820.6181 1 0 011.447-.894L9 7m013l6m-637m6 10l4.5532.276A1 1 0021 18382V7.618 10 00-1447-.894L154134-6                   </svg>
                            Detalles del Viaje
                        </h2>
                        
                        <form id="cotizarForm class="space-y-6">
                            @csrf
                            
                            <div class="relative">
                                <label class="block text-sm font-semibold text-gray-70-2>Destino</label>                   <div class="relative">
                                    <input name="destino" type="text" 
                                           class=w-full pl-10 pr-4 py-3rder-2r-gray-200 rounded-xl focus:border-blue-500 focus:ring-2ocus:ring-blue-200ition-all duration-300" 
                                           placeholder="¿A dónde quieres ir?" required>
                                    <svg class="absolute left-3p-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M17.657 16.657L13.414 20H9a2 2 01-2-2v-4a2 2 012h4.586l4243-4.2438801111.31411.314                   <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2d=M15 11a330 11030                   </svg>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="relative">
                                    <label class="block text-sm font-semibold text-gray-700mb-2>Fecha de Salida</label>
                                    <div class="relative">
                                        <input name="fecha_salida" type="date" 
                                               class=w-full pl-10 pr-4 py-3rder-2r-gray-200 rounded-xl focus:border-blue-500 focus:ring-2ocus:ring-blue-200ition-all duration-300" required>
                                        <svg class="absolute left-3p-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M8 7V384V3m-9 8h10M5 21h14a2 20 002-2V7a2 20 00-2-2H5a2 2 00-22220                   </svg>
                                    </div>
                                </div>

                                <div class="relative">
                                    <label class="block text-sm font-semibold text-gray-700mb-2>Fecha de Regreso</label>
                                    <div class="relative">
                                        <input name="fecha_regreso" type="date" 
                                               class=w-full pl-10 pr-4 py-3rder-2r-gray-200 rounded-xl focus:border-blue-500 focus:ring-2ocus:ring-blue-200ition-all duration-300" required>
                                        <svg class="absolute left-3p-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M8 7V384V3m-9 8h10M5 21h14a2 20 002-2V7a2 20 00-2-2H5a2 2 00-22220                   </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="relative">
                                <label class="block text-sm font-semibold text-gray-70>Número de Personas</label>
                                <div class="relative">
                                    <input name="personas" type="numbermin="1" value="1"
                                           class=w-full pl-10 pr-4 py-3rder-2r-gray-200 rounded-xl focus:border-blue-500 focus:ring-2ocus:ring-blue-200ition-all duration-300" required>
                                    <svg class="absolute left-3p-3.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d="M12 4.35444 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1m0 0h61a6 6 0 00-9-5.197m13.5-9a2.5 2.5 011-5 0550                   </svg>
                                </div>
                            </div>

                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-blue-600o-purple-600over:from-blue-700over:to-purple-70xt-white font-bold py-4 rounded-xl shadow-lg transform hover:scale-105ition-all duration-300 flex items-center justify-center">
                                <svg class="w-55 mr-2" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M9 12l224-4m6 2a9 9 11-1890118                   </svg>
                                Cotizar Viaje
                            </button>
                        </form>
                    </div>

                    <!-- Panel de información -->
                    <div class="space-y-6">
                        <h3 class=text-xl font-bold text-gray-800 flex items-center">
                            <svg class=w-5 h-5r-2xt-green-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M1316h-1v-4h-1m1-4.1M21 12a9 9 11-1890118                   </svg>
                            ¿Por qué cotizar con nosotros?
                        </h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class=flex-shrink-0-8g-blue-100 rounded-full flex items-center justify-center">
                                    <svg class=w-4 h-4 text-blue-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="roundstroke-width="2 d="M12 8c-1.6570-3 .895-321.343 232 3 .895 3 2-1343 2-3 2-8c1.11 02.08.402 2.599 1M12 8V7m01v8m0 010c-10.11 0-282-2.599                   </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800>Mejores Precios</h4>
                                    <p class=text-sm text-gray-600>Garantizamos los precios más competitivos del mercado</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class=flex-shrink-0 w-8-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4h-4xt-green-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d="M9 12 24-450.618.0161.95510.955 112.94410.955110.955 120.944 1210.95510.955 1221.05620212.0201294420311017-0.618-0.044-.924A5903 50.93 019 12c0 2.219 1.791 4 4 2.219 0-10.781 4-40-10.14-.446-2.133172                   </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800>Seguridad Garantizada</h4>
                                    <p class=text-sm text-gray-60as nuestras reservaciones están protegidas</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class=flex-shrink-0 w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4-4t-purple-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="roundstroke-width="2 d=M18.3645.636l-3.536.536 5.656l3.536 3.536M9.172 9.172L5.636 5.636m353690.192L5.636 18364M12 2.944A9.7599.7590 01294412A97599.7590 01221.56A9.7599.7590 01294412A9.75990.7590112                   </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800>Atención 24/7</h4>
                                    <p class=text-sm text-gray-600">Soporte disponible en cualquier momento</p>
                                </div>
                            </div>
                        </div>

                        <!-- Resultado de cotización -->
                        <div id=cotizacionResult" class="hidden"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Destinos populares -->
        <div class="mt-16>         <h2 class="text-3nt-bold text-white text-center mb-8">Destinos Populares</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6>
                <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16-16 bg-gradient-to-br from-blue-400purple-50unded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-88text-white" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M3.055 11H5a2 2 012 2v1a2 0 002 2 2 012 2v2.945M8 3.935V5.5A2.5 2.5 0 10.5 8h.5a2 0 012 2 2 0 104 220 12-21.064M150.488V18a220 012-2h3064M21 12a9 9 11-1890118                   </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Cancún</h3>
                    <p class="text-blue-200 text-sm>Desde $8,500 MXN</p>
                </div>
                
                <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16-16 bg-gradient-to-br from-green-400 to-blue-50unded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-88text-white" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M19 21V5a2 20 00-2-2H72 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h59 7h1m-1 4h1m-5 10v-5a1 1 011-1h2a1 11115                   </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2>Puerto Vallarta</h3>
                    <p class="text-blue-200 text-sm>Desde $7,200 MXN</p>
                </div>
                
                <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16-16 bg-gradient-to-br from-yellow-400orange-50unded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-88text-white" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2d=M21 12a9 9 001-9 9m9-9a9 9 0 00-9-99 9H3m9 9a990 01-9-99 9c1.657 3-4.03 3-9s-1.343-9-3-9m018c-1.6570-3-4.03-3-9s1.343-93-9990                   </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2                   <p class="text-blue-200 text-sm>Desde $9,800 MXN</p>
                </div>
                
                <div class="bg-white/10op-blur-sm rounded-xl p-6 text-center hover:bg-white/20 transition-all duration-300 cursor-pointer">
                    <div class="w-16-16 bg-gradient-to-br from-pink-400 to-red-50unded-full mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-88text-white" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M17.657 16.657L13.414 20H9a2 2 01-2-2v-4a2 2 012h4.586l4243-4.2438801111.31411.314                   <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2d=M15 11a330 11030                   </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2>Riviera Maya</h3>
                    <p class="text-blue-200 text-sm>Desde $8,900 MXN</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById(cotizarForm).addEventListener(submit', function(e) {
    e.preventDefault();
    let form = e.target;
    let data = new FormData(form);

    // Mostrar loading
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = `
        <svg class=animate-spin -ml-1 mr-3 h-5 text-white" xmlns=http://www.w3.org/2000 fill=noneviewBox="0 0 2424           <circle class="opacity-25 cx=12120roke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75fill=currentColor" d=M4 12 8 0 018V0C53730 0 5.373 02h4zm2 5.291A7962 7.9620 01412H0 3.042.135 5.8247.9383z"></path>
        </svg>
        Cotizando...
    `;
    submitBtn.disabled = true;

    fetch('{{ route('viajes.cotizar') }}',[object Object]
        method: 'POST,
        headers: [object Object]           X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: data
    })
    .then(res => res.json())
    .then(res => {
        const resultDiv = document.getElementById('cotizacionResult);
        resultDiv.innerHTML = `
            <div class="bg-gradient-to-r from-green-50 to-blue-50 border border-green-200nded-xl p-6 shadow-lg>
                <div class=flex items-center mb-4">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                        <svg class="w-6h-6xt-green-600" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="roundstroke-width=2 d=M9 12l224-4m6 2a9 9 11-1890118                   </svg>
                    </div>
                    <h3 class=text-lg font-bold text-gray-800>¡Cotización Lista!</h3                </div>
                
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-white rounded-lg p-3">
                        <p class=text-sm text-gray-600                   <p class="font-semibold text-gray-800>${res.cotizacion.destino}</p>
                    </div>
                    <div class="bg-white rounded-lg p-3">
                        <p class=text-sm text-gray-600                   <p class="font-semibold text-gray-800>${res.cotizacion.personas}</p>
                    </div>
                    <div class="bg-white rounded-lg p-3">
                        <p class=text-sm text-gray-600">Salida</p>
                        <p class="font-semibold text-gray-800>${res.cotizacion.fecha_salida}</p>
                    </div>
                    <div class="bg-white rounded-lg p-3">
                        <p class=text-sm text-gray-600                   <p class="font-semibold text-gray-800>${res.cotizacion.fecha_regreso}</p>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-blue-500purple-600 rounded-lg p-4 mb-4">
                    <p class="text-white text-center">
                        <span class="text-2 font-bold>$${res.precio.toLocaleString()} MXN</span>
                        <br>
                        <span class="text-sm opacity-90cio estimado total</span>
                    </p>
                </div>
                
                <form method="POSTaction="[object Object]{ route('viajes.guardar') }} class="space-y-3">
                    @csrf
                    <input type="hidden" name="destinovalue="${res.cotizacion.destino}">
                    <input type="hidden" name="fecha_salidavalue="${res.cotizacion.fecha_salida}">
                    <input type="hidden" name="fecha_regresovalue="${res.cotizacion.fecha_regreso}">
                    <input type="hidden" name="personasvalue="${res.cotizacion.personas}">
                    <input type=hidden" name=precio" value="${res.precio}">
                    
                    <button type="submit class=w-full bg-gradient-to-r from-yellow-500o-orange-500 hover:from-yellow-600over:to-orange-60xt-white font-bold py-3 rounded-lg shadow-lg transform hover:scale-105ition-all duration-300 flex items-center justify-center">
                        <svg class="w-55 mr-2" fill="none" stroke="currentColorviewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="roundstroke-width="2 d="M5 134                   </svg>
                        Guardar Viaje
                    </button>
                </form>
            </div>
        `;
        resultDiv.classList.remove('hidden');
        
        // Scroll suave al resultado
        resultDiv.scrollIntoView({ behavior: smooth, block: 'center });
    })
    .catch(error =>[object Object]     console.error(Error:, error);
        alert('Hubo un error al cotizar. Por favor, intenta de nuevo.');
    })
    .finally(() =>[object Object]        // Restaurar botón
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});
</script> 
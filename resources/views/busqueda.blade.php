@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="min-h-screen flex flex-col items-center justify-center bg-gradient-to-br from-blue-100 to-indigo-200 py-8 px-4">
    <h2 class="text-2xl font-bold text-center text-indigo-700 mb-6">Buscar Vuelos</h2>
    <form id="searchForm" class="flex flex-col gap-4 w-full max-w-md">
        <div class="relative">
            <input type="text" id="destino" name="destino" placeholder="Destino" required autocomplete="off" class="rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition w-full" />
            <ul id="autocomplete-list" class="absolute z-10 left-0 right-0 bg-white border border-gray-200 rounded-b-lg shadow-lg max-h-48 overflow-y-auto hidden"></ul>
        </div>
        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-lg shadow transition active:scale-95">Buscar</button>
    </form>
    <div id="resultados" class="mt-8 min-h-[60px] w-full max-w-6xl"></div>
</div>

<style>
@keyframes spin {
  to { transform: rotate(360deg); }
}
.animate-spin {
  animation: spin 1s linear infinite;
}
@keyframes fade-in {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}
.animate-fade-in {
  animation: fade-in 0.7s ease;
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('searchForm');
        const resultadosDiv = document.getElementById('resultados');
        const csrfMeta = document.querySelector('meta[name="csrf-token"]');

        if (!form || !resultadosDiv || !csrfMeta) {
            console.error('Elementos del DOM faltantes');
            return;
        }

        const csrfToken = csrfMeta.getAttribute('content');

        const params = new URLSearchParams(window.location.search);
        const destinoParam = params.get('destino');
        const fechasParam = params.get('fechas');
        const huespedesParam = params.get('huespedes');
        const vueloParam = params.get('vuelo');
        const autoParam = params.get('auto');

        if (destinoParam) {
            document.getElementById('destino').value = destinoParam;
            buscarAjax(destinoParam, fechasParam, huespedesParam, vueloParam, autoParam);
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const destino = document.getElementById('destino').value.trim();
            buscarAjax(destino);
        });

        function mostrarSpinner() {
            resultadosDiv.innerHTML = `<div class='flex justify-center'><div class='animate-spin rounded-full h-10 w-10 border-t-4 border-indigo-600 border-solid'></div></div><p class='text-center text-indigo-500 mt-2'>Buscando...</p>`;
        }

        function mostrarError(mensaje) {
            resultadosDiv.innerHTML = `<div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg text-center animate-fade-in'>${mensaje}</div>`;
        }

        function mostrarVacio() {
            resultadosDiv.innerHTML = `<div class='bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded-lg text-center animate-fade-in'>No se encontraron resultados.</div>`;
        }

        function mostrarResultados(resultados) {
            let html = '<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">';
            resultados.slice(0, 16).forEach(vuelo => {
                let img = vuelo.imagen || vuelo.image || '/images/aeromexico.webp';
                html += `
                <div class='relative bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col transition-transform duration-300 hover:scale-105 hover:shadow-2xl animate-fade-in group'>
                    <div class='h-32 bg-cover bg-center' style='background-image:url(${img});'>
                        <div class='absolute top-2 right-2 bg-white/80 rounded-full px-3 py-1 text-xs font-bold text-indigo-700 shadow group-hover:bg-indigo-600 group-hover:text-white transition'>
                            ${vuelo.vuelo || vuelo.airline_name || 'Vuelo'}
                        </div>
                    </div>
                    <div class='flex-1 flex flex-col justify-between p-4'>
                        <div>
                            <div class='flex items-center gap-2 mb-2'>
                                <span class='text-indigo-700 text-lg font-bold'>${vuelo.destino || vuelo.destination_city}</span>
                                <span class='ml-auto text-gray-400 text-xs'>${vuelo.fecha || ''}</span>
                            </div>
                            <div class='flex items-center gap-2 mb-2'>
                                <span class='text-gray-500 text-sm'>${vuelo.origen || vuelo.origin_city || 'Origen desconocido'}</span>
                                <span class='text-gray-400'>→</span>
                                <span class='text-gray-500 text-sm'>${vuelo.destino || vuelo.destination_city}</span>
                            </div>
                        </div>
                        <div class='flex items-center justify-between mt-4'>
                            <span class='text-green-600 font-bold text-lg'>$${vuelo.precio || vuelo.price}</span>
                            <button class='bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-1 rounded-lg font-semibold shadow transition'>Reservar</button>
                        </div>
                    </div>
                </div>`;
            });
            html += '</div>';
            resultadosDiv.innerHTML = html;
        }

        function buscarAjax(destino, fechas = '', huespedes = '', vuelo = 0, auto = 0) {
            mostrarSpinner();
            fetch('/busquedas/ajax', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ destino, fechas, huespedes, vuelo, auto })
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    mostrarError(data.error);
                    return;
                }
                if (!data.resultados.length) {
                    mostrarVacio();
                    return;
                }
                mostrarResultados(data.resultados);
            })
            .catch(error => {
                mostrarError(`Error en la solicitud AJAX: ${error.message}`);
            });
        }

        // --- Autocompletado de destinos ---
        let destinosUnicos = [];
        fetch('/data/vuelos.json')
            .then(res => res.json())
            .then(data => {
                const destinos = data.map(v => v.destination_city).filter(Boolean);
                destinosUnicos = [...new Set(destinos)].sort();
            });

        const destinoInput = document.getElementById('destino');
        const autocompleteList = document.getElementById('autocomplete-list');

        destinoInput.addEventListener('input', function() {
            const val = this.value.trim().toLowerCase();
            autocompleteList.innerHTML = '';
            if (!val || destinosUnicos.length === 0) {
                autocompleteList.classList.add('hidden');
                return;
            }
            const sugerencias = destinosUnicos.filter(dest => dest.toLowerCase().includes(val)).slice(0, 8);
            if (sugerencias.length === 0) {
                autocompleteList.classList.add('hidden');
                return;
            }
            sugerencias.forEach(dest => {
                const li = document.createElement('li');
                li.textContent = dest;
                li.className = 'px-4 py-2 cursor-pointer hover:bg-indigo-100';
                li.onclick = () => {
                    destinoInput.value = dest;
                    autocompleteList.classList.add('hidden');
                };
                autocompleteList.appendChild(li);
            });
            autocompleteList.classList.remove('hidden');
        });
        document.addEventListener('click', function(e) {
            if (!autocompleteList.contains(e.target) && e.target !== destinoInput) {
                autocompleteList.classList.add('hidden');
            }
        });
    });
</script>
@endsection
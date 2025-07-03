@include('layouts.nav-dashboard')

<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        width: 100vw;
        min-height: 100vh;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #f4f6f8 0%, #e0e7ff 100%);
        overflow-x: hidden;
    }
    .main-dashboard {
        min-height: 100vh;
        min-width: 100vw;
        width: 100vw;
        height: 100vh;
        margin: 0;
        padding: 0 0 40px 0;
        background: transparent;
        border-radius: 0;
        box-shadow: none;
        display: flex;
        flex-direction: column;
        gap: 32px;
    }
    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 40px 6vw 0 6vw;
    }
    .dashboard-title {
        font-size: 2.2rem;
        font-weight: 700;
        color: #4000c7;
        letter-spacing: 1px;
    }
    .dashboard-actions {
        display: flex;
        gap: 16px;
    }
    .dashboard-btn {
        background: linear-gradient(90deg, #4000c7 60%, #0057e7 100%);
        color: #fff;
        border: none;
        border-radius: 999px;
        padding: 14px 32px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(64,0,199,0.08);
        transition: background 0.2s, transform 0.2s;
    }
    .dashboard-btn:hover {
        background: linear-gradient(90deg, #0057e7 60%, #4000c7 100%);
        transform: translateY(-2px) scale(1.03);
    }
    .section-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #222;
        margin-bottom: 12px;
        margin-left: 6vw;
    }
    .destinos-list, .listas-cotizacion {
        display: flex;
        flex-wrap: wrap;
        gap: 24px;
        padding: 0 6vw;
    }
    .destino-card, .lista-card {
        background: #f8f9ff;
        border-radius: 14px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.07);
        padding: 18px 20px;
        min-width: 220px;
        max-width: 260px;
        flex: 1 1 220px;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: box-shadow 0.2s, transform 0.2s;
        position: relative;
    }
    .destino-card img {
        width: 100%;
        max-width: 180px;
        border-radius: 10px;
        margin-bottom: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .destino-card .destino-nombre {
        font-size: 1.1rem;
        font-weight: 600;
        color: #4000c7;
        margin-bottom: 6px;
    }
    .destino-card .destino-desc {
        font-size: 0.97rem;
        color: #444;
        margin-bottom: 10px;
        text-align: center;
    }
    .remove-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #ff4d4f;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        font-size: 1.1rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
    }
    .remove-btn:hover {
        background: #d90429;
    }
    .qr-section {
        display: flex;
        align-items: center;
        gap: 32px;
        background: #2e0073;
        color: #fff;
        border-radius: 14px;
        padding: 24px 32px;
        margin-top: 18px;
        box-shadow: 0 2px 12px rgba(46,0,115,0.13);
        margin-left: 6vw;
        margin-right: 6vw;
    }
    .qr-section img {
        width: 110px;
        border-radius: 8px;
        background: #fff;
        padding: 6px;
    }
    .qr-section .qr-info {
        flex: 1;
    }
    .qr-section .qr-btn {
        background: #fff;
        color: #2e0073;
        border: none;
        border-radius: 999px;
        padding: 10px 22px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 10px;
        transition: background 0.2s, color 0.2s;
    }
    .qr-section .qr-btn:hover {
        background: #e0e7ff;
        color: #4000c7;
    }
    /* Modal */
    .modal-bg {
        position: fixed;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.25);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
        animation: fadeIn 0.2s;
    }
    .modal {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.18);
        padding: 32px 28px;
        min-width: 340px;
        max-width: 95vw;
        width: 420px;
        position: relative;
        animation: popIn 0.2s;
    }
    .modal-close {
        position: absolute;
        top: 16px;
        right: 18px;
        background: none;
        border: none;
        font-size: 1.5rem;
        color: #4000c7;
        cursor: pointer;
    }
    .modal-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #4000c7;
        margin-bottom: 18px;
    }
    .modal-destinos {
        display: flex;
        flex-wrap: wrap;
        gap: 18px;
        margin-bottom: 18px;
    }
    .modal-destino {
        background: #f4f6f8;
        border-radius: 10px;
        padding: 12px 10px;
        width: 120px;
        text-align: center;
        cursor: pointer;
        border: 2px solid transparent;
        transition: border 0.2s, box-shadow 0.2s;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .modal-destino.selected {
        border: 2px solid #4000c7;
        box-shadow: 0 2px 8px rgba(64,0,199,0.08);
    }
    .modal-destino img {
        width: 60px;
        border-radius: 8px;
        margin-bottom: 6px;
    }
    .modal-actions {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
    }
    .modal-btn {
        background: #4000c7;
        color: #fff;
        border: none;
        border-radius: 999px;
        padding: 10px 22px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
    }
    .modal-btn:hover {
        background: #0057e7;
    }
    /* Modal QR */
    .modal-cards {
        display: flex;
        flex-wrap: wrap;
        gap: 18px;
        margin-top: 18px;
    }
    @keyframes fadeIn {
        from { opacity: 0; } to { opacity: 1; }
    }
    @keyframes popIn {
        from { transform: scale(0.95); opacity: 0; } to { transform: scale(1); opacity: 1; }
    }
    @media (max-width: 700px) {
        .main-dashboard { padding: 0; min-width: 100vw; }
        .dashboard-header { flex-direction: column; gap: 18px; align-items: flex-start; padding: 30px 4vw 0 4vw; }
        .qr-section { flex-direction: column; gap: 18px; padding: 18px; margin-left: 4vw; margin-right: 4vw; }
        .section-title { margin-left: 4vw; }
        .destinos-list, .listas-cotizacion { padding: 0 4vw; }
    }
</style>

<div class="main-dashboard">
    <div class="dashboard-header">
        <div class="dashboard-title">¡Bienvenido a tu panel de viajes!</div>
        <div class="dashboard-actions">
            <button class="dashboard-btn" id="verProductosBtn">Ver productos</button>
            <button class="dashboard-btn" id="crearListaBtn">Crear lista</button>
        </div>
    </div>

    <div>
        <div class="section-title">Viajes activos</div>
        <div class="destinos-list" id="destinosActivos">
            <!-- Cards de destinos seleccionados -->
        </div>
    </div>

    <div>
        <div class="section-title">Listas de cotización</div>
        <div class="listas-cotizacion" id="listasCotizacion">
            <!-- Cards de listas de cotización -->
        </div>
    </div>

    <div class="qr-section">
        <div class="qr-info">
            <div style="font-size:1.1rem;font-weight:600;">Escanea para ver tus opciones seleccionadas</div>
            <div style="font-size:0.97rem;">¡Lleva tus viajes contigo! Escanea el código QR para ver tus destinos y cotizaciones en formato visual.</div>
            <button class="qr-btn" id="verQrBtn">Ver opciones seleccionadas</button>
        </div>
        <img id="qrImg" src="https://api.qrserver.com/v1/create-qr-code/?size=110x110&data=https://voyago.com/usuario/opciones" alt="QR">
    </div>
</div>

<!-- Modal de productos -->
<div id="modalProductos" class="modal-bg" style="display:none;">
    <div class="modal">
        <button class="modal-close" onclick="cerrarModal('modalProductos')">&times;</button>
        <div class="modal-title">Elige tus destinos favoritos</div>
        <div class="modal-destinos" id="modalDestinos">
            <!-- Opciones de destinos -->
        </div>
        <div class="modal-actions">
            <button class="modal-btn" onclick="confirmarDestinos()">Agregar</button>
        </div>
    </div>
</div>

<!-- Modal QR con cards -->
<div id="modalQr" class="modal-bg" style="display:none;">
    <div class="modal" style="max-width:600px;">
        <button class="modal-close" onclick="cerrarModal('modalQr')">&times;</button>
        <div class="modal-title">Opciones seleccionadas</div>
        <div class="modal-cards" id="modalQrCards">
            <!-- Cards de destinos y listas -->
        </div>
    </div>
</div>

<!-- Modal crear lista -->
<div id="modalLista" class="modal-bg" style="display:none;">
    <div class="modal">
        <button class="modal-close" onclick="cerrarModal('modalLista')">&times;</button>
        <div class="modal-title">Crear nueva lista de cotización</div>
        <input id="nombreLista" type="text" placeholder="Nombre de la lista" style="width:100%;padding:10px 12px;border-radius:8px;border:1px solid #ccc;margin-bottom:14px;">
        <div style="font-size:0.97rem;margin-bottom:8px;">Selecciona destinos para tu lista:</div>
        <div class="modal-destinos" id="modalListaDestinos">
            <!-- Opciones de destinos -->
        </div>
        <div class="modal-actions">
            <button class="modal-btn" onclick="confirmarLista()">Crear lista</button>
        </div>
    </div>
</div>

<script>
// Datos de ejemplo de destinos
const destinos = [
    { nombre: 'Cancún', desc: 'Playas paradisíacas y vida nocturna.', img: 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80' },
    { nombre: 'París', desc: 'La ciudad del amor y la luz.', img: 'https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80' },
    { nombre: 'Nueva York', desc: 'La ciudad que nunca duerme.', img: 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80' },
    { nombre: 'Tokio', desc: 'Tecnología y tradición en armonía.', img: 'https://images.unsplash.com/photo-1505761671935-60b3a7427bad?auto=format&fit=crop&w=400&q=80' },
    { nombre: 'Roma', desc: 'Historia, arte y gastronomía.', img: 'https://images.unsplash.com/photo-1467269204594-9661b134dd2b?auto=format&fit=crop&w=400&q=80' },
    { nombre: 'Londres', desc: 'Cultura, música y modernidad.', img: 'https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?auto=format&fit=crop&w=400&q=80' },
];

let destinosActivos = [];
let listasCotizacion = [];

// Renderiza los destinos activos
function renderDestinosActivos() {
    const cont = document.getElementById('destinosActivos');
    cont.innerHTML = '';
    destinosActivos.forEach((d, idx) => {
        cont.innerHTML += `
        <div class="destino-card">
            <button class="remove-btn" onclick="eliminarDestino(${idx})">&times;</button>
            <img src="${d.img}" alt="${d.nombre}">
            <div class="destino-nombre">${d.nombre}</div>
            <div class="destino-desc">${d.desc}</div>
        </div>`;
    });
}
function eliminarDestino(idx) {
    destinosActivos.splice(idx, 1);
    renderDestinosActivos();
}

// Renderiza las listas de cotización
function renderListasCotizacion() {
    const cont = document.getElementById('listasCotizacion');
    cont.innerHTML = '';
    listasCotizacion.forEach((l, idx) => {
        cont.innerHTML += `
        <div class="lista-card">
            <button class="remove-btn" onclick="eliminarLista(${idx})">&times;</button>
            <div style="font-weight:600;color:#4000c7;margin-bottom:6px;">${l.nombre}</div>
            <div style="font-size:0.97rem;margin-bottom:8px;">Destinos:</div>
            <ul style="padding-left:18px;margin:0;">
                ${l.destinos.map(d => `<li>${d.nombre}</li>`).join('')}
            </ul>
        </div>`;
    });
}
function eliminarLista(idx) {
    listasCotizacion.splice(idx, 1);
    renderListasCotizacion();
}

// Modal de productos
const modalProductos = document.getElementById('modalProductos');
const modalDestinos = document.getElementById('modalDestinos');
let seleccionados = [];

document.getElementById('verProductosBtn').onclick = function() {
    seleccionados = [];
    modalDestinos.innerHTML = '';
    destinos.forEach((d, idx) => {
        modalDestinos.innerHTML += `
        <div class="modal-destino" data-idx="${idx}" onclick="toggleSeleccion(${idx}, this)">
            <img src="${d.img}" alt="${d.nombre}">
            <div style="font-weight:600;">${d.nombre}</div>
        </div>`;
    });
    modalProductos.style.display = 'flex';
}
function toggleSeleccion(idx, el) {
    if (seleccionados.includes(idx)) {
        seleccionados = seleccionados.filter(i => i !== idx);
        el.classList.remove('selected');
    } else {
        seleccionados.push(idx);
        el.classList.add('selected');
    }
}
function confirmarDestinos() {
    seleccionados.forEach(idx => {
        if (!destinosActivos.some(d => d.nombre === destinos[idx].nombre)) {
            destinosActivos.push(destinos[idx]);
        }
    });
    renderDestinosActivos();
    cerrarModal('modalProductos');
}

// Modal crear lista
const modalLista = document.getElementById('modalLista');
const modalListaDestinos = document.getElementById('modalListaDestinos');
let seleccionadosLista = [];

document.getElementById('crearListaBtn').onclick = function() {
    seleccionadosLista = [];
    modalListaDestinos.innerHTML = '';
    destinos.forEach((d, idx) => {
        modalListaDestinos.innerHTML += `
        <div class="modal-destino" data-idx="${idx}" onclick="toggleSeleccionLista(${idx}, this)">
            <img src="${d.img}" alt="${d.nombre}">
            <div style="font-weight:600;">${d.nombre}</div>
        </div>`;
    });
    modalLista.style.display = 'flex';
}
function toggleSeleccionLista(idx, el) {
    if (seleccionadosLista.includes(idx)) {
        seleccionadosLista = seleccionadosLista.filter(i => i !== idx);
        el.classList.remove('selected');
    } else {
        seleccionadosLista.push(idx);
        el.classList.add('selected');
    }
}
function confirmarLista() {
    const nombre = document.getElementById('nombreLista').value.trim();
    if (!nombre) {
        alert('Ponle un nombre a tu lista');
        return;
    }
    if (seleccionadosLista.length === 0) {
        alert('Selecciona al menos un destino');
        return;
    }
    const destinosSel = seleccionadosLista.map(idx => destinos[idx]);
    listasCotizacion.push({ nombre, destinos: destinosSel });
    renderListasCotizacion();
    cerrarModal('modalLista');
    document.getElementById('nombreLista').value = '';
}

// Modal QR
const modalQr = document.getElementById('modalQr');
const modalQrCards = document.getElementById('modalQrCards');
document.getElementById('verQrBtn').onclick = function() {
    modalQrCards.innerHTML = '';
    destinosActivos.forEach(d => {
        modalQrCards.innerHTML += `
        <div class="destino-card">
            <img src="${d.img}" alt="${d.nombre}">
            <div class="destino-nombre">${d.nombre}</div>
            <div class="destino-desc">${d.desc}</div>
        </div>`;
    });
    listasCotizacion.forEach(l => {
        modalQrCards.innerHTML += `
        <div class="lista-card">
            <div style="font-weight:600;color:#4000c7;margin-bottom:6px;">${l.nombre}</div>
            <div style="font-size:0.97rem;margin-bottom:8px;">Destinos:</div>
            <ul style="padding-left:18px;margin:0;">
                ${l.destinos.map(d => `<li>${d.nombre}</li>`).join('')}
            </ul>
        </div>`;
    });
    modalQr.style.display = 'flex';
}

// Cerrar modales
function cerrarModal(id) {
    document.getElementById(id).style.display = 'none';
}
</script>

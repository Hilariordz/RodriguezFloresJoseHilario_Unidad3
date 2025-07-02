@include('layouts.nav-dashboard')

<style>
    * {
        box-sizing: border-box;
    }

    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        font-family: sans-serif;
    }

    .container {
        display: flex;
        flex-direction: column;
        height: 100vh;
        width: 100%;
    }

    h1 {
        padding: 20px;
        font-size: 24px;
        flex-shrink: 0;
    }

    .tabs {
        display: flex;
        justify-content: center;
        border-bottom: 1px solid #ccc;
        background-color: #fff;
        flex-shrink: 0;
    }

    .tab {
        padding: 15px 20px;
        cursor: pointer;
        font-weight: 500;
        color: #333;
        flex: 1;
        text-align: center;
    }

    .tab.active {
        border-bottom: 3px solid #0057e7;
        font-weight: bold;
        color: #0057e7;
        background: #f4f6f8;
    }

    .content {
        flex-grow: 1;
        overflow-y: auto;
        background-color: #f4f6f8;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .section {
        display: none;
        flex-direction: column;
        gap: 20px;
        padding: 20px;
        min-height: 100%;
        flex-grow: 1;
    }

    .section.active {
        display: flex;
    }

    .card {
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
    }

    .button {
        background: #4000c7;
        color: white;
        padding: 12px 20px;
        border-radius: 999px;
        border: none;
        font-weight: bold;
        margin-top: 20px;
        cursor: pointer;
    }

    .crear-lista {
        height: 40px;
        padding: 10px 25px;
        border-radius: 999px;
        border: 1px solid #4000c7;
        color: #4000c7;
        font-weight: bold;
        background: white;
        align-self: flex-start;
    }

    .qr-card {
        display: flex;
        flex-direction: column;
        background: #2e0073;
        color: white;
        border-radius: 12px;
        padding: 20px;
    }

    .qr-card-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .qr-card img {
        max-width: 100px;
    }

    @media (max-width: 768px) {
        .qr-card-content {
            flex-direction: column;
            align-items: flex-start;
        }

        .tab {
            padding: 12px 10px;
            font-size: 14px;
        }

        h1 {
            font-size: 20px;
            padding: 10px;
        }

        .section {
            padding: 10px;
        }
    }
</style>

<div class="container">
    <h1>Mis Viajes</h1>

    <!-- Tabs -->
    <div class="tabs">
        <div class="tab active" data-id="planeados">Planeados</div>
        <div class="tab" data-id="activos">Activos</div>
        <div class="tab" data-id="pasados">Pasados</div>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Planeados -->
        <div class="section active" id="planeados">
            <div class="card">
                <h2>Comienza a planear tu viaje</h2>
                <p>Guarda tus favoritos y comienza a planear tu viaje a ese destino que siempre soñaste.</p>
                <button class="button">Ver productos</button>
            </div>
            <button class="crear-lista">Crear lista</button>
        </div>

        <!-- Activos -->
        <div class="section" id="activos">
            <div class="card">
                <h2>¿Ya elegiste tu próximo destino?</h2>
                <p>Encuentra todo lo que necesitas para tu nueva aventura.</p>
                <button class="button" style="background:#0057e7;">Planifica tu viaje</button>
            </div>
            <div class="card qr-card">
                <div class="qr-card-content">
                    <div>
                        <h3>¡Ahorra en tus viajes!</h3>
                        <p>Con nuestra app pagas más barato y tienes tus reservas siempre a mano.</p>
                    </div>
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=https://tuapp.com" alt="QR">
                </div>
            </div>
        </div>

        <!-- Pasados -->
        <div class="section" id="pasados">
            <div class="card">
                <h2>Viajes pasados</h2>
                <p>Aquí verás los viajes que ya realizaste.</p>
                <button class="button">Ver historial</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.tab').forEach(tab => {
        tab.addEventListener('click', function () {
            const id = this.dataset.id;
            const sections = document.querySelectorAll('.section');
            const tabs = document.querySelectorAll('.tab');

            sections.forEach(s => s.classList.remove('active'));
            tabs.forEach(t => t.classList.remove('active'));

            document.getElementById(id).classList.add('active');
            this.classList.add('active');
        });
    });
</script>

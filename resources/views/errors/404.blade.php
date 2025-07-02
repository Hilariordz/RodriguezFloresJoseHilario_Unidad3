<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

         .video-bg {
            position: fixed;
            top: 0; left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
        }

        .center-content {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
        }

        .floating-404 {
            font-size: 10rem;
            font-weight: 800;
            letter-spacing: 0.5rem;
            text-shadow: 0 4px 30px rgba(0,0,0,0.5);
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
        <video class="video-bg" src="{{ asset('images/vidio 404 voyago.mp4') }}" autoplay loop muted></video>

    <div class="center-content">
        <div class="floating-404">404</div>

        <!-- Botón animado -->
        <a href="{{ url('/') }}">
            <button
              class="group relative px-10 py-5 rounded-xl bg-zinc-900 text-amber-300 font-bold tracking-widest uppercase text-sm border-b-4 border-amber-400/50 hover:border-amber-400 transition-all duration-300 ease-in-out hover:text-amber-200 shadow-[0_10px_20px_rgba(251,191,36,0.15)] hover:shadow-[0_15px_30px_rgba(251,191,36,0.25)] active:border-b-0 active:translate-y-1"
            >
              <span class="flex items-center gap-3 relative z-10">
                <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
                  <path d="M12 2L9.1 9.1H2L7.5 13.8L5.7 21L12 17.3L18.3 21L16.5 13.8L22 9.1H14.9L12 2Z"></path>
                </svg>
                Regresar a la página
                <svg
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="w-5 h-5 transition-all duration-300 group-hover:translate-x-1"
                >
                  <path d="M12 4L10.6 5.4L16.2 11H4V13H16.2L10.6 18.6L12 20L20 12L12 4Z"></path>
                </svg>
              </span>
              <div
                class="absolute -inset-1 rounded-xl bg-gradient-to-br from-amber-500/20 to-yellow-500/20 blur-2xl group-hover:blur-xl transition-all duration-300 -z-10 opacity-0 group-hover:opacity-100"
              ></div>
            </button>
        </a>
    </div>

</body>
</html>

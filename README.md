<h1 align="center">🌍 Bienvenid@ a Voyago</h1>

<p align="center">
  <img src="assets/Voyago.png" alt="Logo de Voyago" width="150">
</p>

<p align="center"><b>Explora el mundo, una ciudad a la vez.</b></p>

[![-----------------------------------------------------](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/aqua.png)](#)

<b>Acerca de este proyecto:</b><br/>
:airplane: Plataforma web para explorar destinos turísticos nacionales e internacionales<br/>
:triangular_flag_on_post: Busca, compara y consulta vuelos y hoteles<br/>
:star2: Promociones, mapas interactivos y diseño responsive<br/>
:globe_with_meridians: Construido con tecnologías modernas para una experiencia fluida<br/>
:wrench: Proyecto desarrollado como MVP en entorno educativo y profesional<br/>
:computer: Backend robusto con Laravel + Blade + MySQL<br/>

:speech_balloon: ¿Tienes sugerencias o quieres colaborar?  
<a href="https://github.com/TU_USUARIO/voyago/issues/new?assignees=&labels=idea&template=feature_request.md&title=[Idea]+">¡Cuéntanos aquí!</a> 💡

---

### 🛠 **Languages and Tools:**

<code><img height="20" src="https://img.icons8.com/nolan/96/laravel.png" /></code> Laravel
<code><img height="20" src="https://img.icons8.com/ios-filled/50/000000/source-code.png" /></code> Blade
<code><img height="20" src="https://img.icons8.com/color/96/css3.png" /></code> CSS3
<code><img height="20" src="https://img.icons8.com/color/96/tailwindcss.png" /></code> TailwindCSS  
<code><img height="20" src="https://img.icons8.com/nolan/96/sql.png" /></code> MySQL
<code><img height="20" src="https://img.icons8.com/offices/30/php-logo.png" /></code> PHP
<code><img height="20" src="https://img.icons8.com/nolan/96/git.png" /></code> Git

---
# 1. Clona el repositorio
git clone https://github.com/Hilariordz/voyago.git
cd voyago

# 2. Instala dependencias de PHP
composer install

# 3. Copia el archivo de entorno y genera la clave
cp .env.example .env
php artisan key:generate

# 4. Configura tu archivo .env
Asegúrate de tener tu base de datos MySQL creada

DB_DATABASE=turismo_db
DB_USERNAME=root
DB_PASSWORD=  # tu contraseña si aplica

# 5. Ejecuta las migraciones
php artisan migrate

# 6. Instala dependencias de frontend (Vite, Tailwind, etc.)
npm install
npm run dev

# 7. Levanta el servidor
php artisan serve



  <img src="https://media.giphy.com/media/jpVnC65DmYeyRL4LHS/giphy.gif" width="20%">

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Destino;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\BusquedaController;
use Illuminate\Http\Request;
use App\Http\Controllers\ViajeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Rutas para dashboard AJAX
    Route::get('/api/planeados', [BusquedaController::class, 'planeados']);
    Route::get('/api/activos', [BusquedaController::class, 'activos']);
    Route::get('/api/pasados', [BusquedaController::class, 'pasados']);
    Route::post('/api/planeados', [BusquedaController::class, 'crearPlaneado']);
});
Route::resource('destinos', DestinoController::class);
Route::view('/help', 'help')->name('help');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/contacto', [ContactoController::class, 'form'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'enviar'])->name('contacto.enviar');
Route::get('/contacto', [ContactoController::class, 'form'])->name('contacto');
Route::view('/playa', 'destinos.playa');
Route::view('/ciudades', 'destinos.ciudades');
Route::view('/reservas/hoteles', 'reservas.hoteles');
Route::view('/reservas/vuelos', 'reservas.vuelos');
Route::view('/reservas/paquetes', 'reservas.paquetes');
Route::view('/ofertas/hoteles', 'ofertas.hoteles');
Route::view('/ofertas/ofertas', 'ofertas.ofertas');
Route::view('/ofertas/last-minute', 'ofertas.last-minute');
Route::get('/destinos', function () {
    return view('destinos.destinos');
});
Route::get('/reservas', function () { return view('reservas.reservas');
});
Route::get('/busqueda', function () {
    return view('busqueda'); // La vista con el formulario
});

Route::post('/busquedas/ajax', function (Request $request) {
    $busqueda = strtolower($request->input('destino', ''));
    $jsonPath = public_path('json/vuelos.json');

    if (!file_exists($jsonPath)) {
        return response()->json(['error' => 'No se encontró el archivo de vuelos.'], 404);
    }

    $contenido = file_get_contents($jsonPath);
    $jsonData = json_decode($contenido, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        return response()->json(['error' => 'El archivo JSON está mal formado.'], 500);
    }

    $resultados = collect($jsonData)->filter(function ($item) use ($busqueda) {
        return Str::contains(strtolower($item['pais'] ?? ''), $busqueda) ||
               Str::contains(strtolower($item['lugar'] ?? ''), $busqueda);
    })->values();

    return response()->json([
        'mensaje' => 'Búsqueda realizada con éxito',
        'resultados' => $resultados
    ]);
});
Route::post('/busqueda', [BusquedaController::class, 'buscar'])->name('busqueda');
Route::get('/planeados', [ViajeController::class, 'planeados']);
Route::get('/activos', [ViajeController::class, 'activos']);
Route::get('/pasados', [ViajeController::class, 'pasados']);
Route::post('/planeados', [ViajeController::class, 'guardar']);
Route::post('/busquedas/ajax', [BusquedaController::class, 'buscarAjax'])->name('busquedas.ajax');

require __DIR__.'/auth.php';

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
use App\Models\User;
use App\Http\Controllers\SolicitudAyudaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ViajeController::class, 'dashboard'])->name('dashboard');
    Route::post('/viajes/cotizar', [ViajeController::class, 'cotizar'])->name('viajes.cotizar');
    Route::post('/viajes/guardar', [ViajeController::class, 'guardar'])->name('viajes.guardar');
    Route::get('/viajes/{id}', [ViajeController::class, 'show'])->name('viajes.show');
    Route::delete('/viajes/{id}', [ViajeController::class, 'destroy'])->name('viajes.destroy');
    // Nuevas rutas para vistas de usuario
    Route::get('/user/cotizar', [ViajeController::class, 'cotizarView'])->name('user.cotizar');
    Route::get('/user/guardados', [ViajeController::class, 'guardadosView'])->name('user.guardados');
    Route::get('/user/pasados', [ViajeController::class, 'pasadosView'])->name('user.pasados');
});

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
Route::view('/reservas/vuelos', 'reservas.vuelos')->name('reservas.vuelos');
Route::view('/reservas/paquetes', 'reservas.paquetes')->name('reservas.paquetes');
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
Route::post('/viajes/crear', function (\Illuminate\Http\Request $request) {
    $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'estado' => 'required|in:planeado,activo,pasado',
    ]);
    \App\Models\Viaje::create([
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'estado' => $request->estado,
        'user_id' => auth()->id(),
    ]);
    return redirect()->route('dashboard')->with('success', '¡Viaje creado exitosamente!');
})->name('viajes.crear');

require __DIR__.'/auth.php';

// Rutas solo para administradores
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function() {
        return \App\Http\Controllers\Controller::adminDashboardView();
    })->name('admin.dashboard');
    
    Route::get('/admin/usuarios', function () {
        $usuarios = User::all();
        return view('admin.usuarios', compact('usuarios'));
    })->name('admin.usuarios');
    
    Route::patch('/admin/usuarios/{usuario}/cambiar-rol', function (\Illuminate\Http\Request $request, User $usuario) {
        $request->validate(['role' => 'required|in:user,admin']);
        $usuario->role = $request->role;
        $usuario->save();
        return back()->with('success', 'Rol actualizado correctamente.');
    })->name('admin.usuarios.cambiarRol');
    
    Route::get('/admin/destinos', function () {
        $destinos = Destino::all();
        return view('admin.destinos', compact('destinos'));
    })->name('admin.destinos');
    Route::delete('/admin/destinos/{destino}', function (Destino $destino) {
        $destino->delete();
        return back()->with('success', 'Destino eliminado correctamente.');
    })->name('admin.destinos.eliminar');
    Route::post('/admin/destinos/crear', function (\Illuminate\Http\Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'personas' => 'required|integer|min:1',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('destinos', 'public');
        }
        
        \App\Models\Destino::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'personas' => $request->personas,
            'imagen' => $imagenPath,
        ]);
        return back()->with('success', 'Destino creado correctamente.');
    })->name('admin.destinos.crear');
    Route::get('/admin/destinos/{destino}/editar', function (Destino $destino) {
        return view('admin.editar-destino', compact('destino'));
    })->name('admin.destinos.editar');
    Route::put('/admin/destinos/{destino}', function (Illuminate\Http\Request $request, Destino $destino) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
        ]);
        $destino->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);
        return redirect()->route('admin.destinos')->with('success', 'Destino actualizado correctamente.');
    })->name('admin.destinos.actualizar');
});

// Rutas solo para agentes
Route::middleware(['auth', 'agente'])->group(function () {
    Route::get('/agente', function() {
        return view('agente.dashboard');
    })->name('agente.dashboard');
    // Panel completo del agente
    Route::get('/agente/panel', function() {
        return view('agente.panel');
    })->name('agente.panel');

    // Gestión de clientes (CRUD y ver historial)
    Route::resource('/agente/clientes', App\Http\Controllers\AgenteClienteController::class, [
        'as' => 'agente'
    ]);
    Route::get('/agente/clientes/{cliente}/historial', [App\Http\Controllers\AgenteClienteController::class, 'historial'])->name('agente.clientes.historial');
});

Route::view('/atencion', 'atencion')->name('atencion');

// Ruta para que el usuario envíe solicitud de ayuda
Route::post('/solicitud-ayuda', [SolicitudAyudaController::class, 'store'])->name('solicitud.ayuda.enviar');

// Rutas para agentes: ver y responder solicitudes
Route::middleware(['auth', 'agente'])->group(function () {
    Route::get('/agente/solicitudes', [SolicitudAyudaController::class, 'index'])->name('agente.solicitudes');
    Route::post('/agente/solicitudes/{id}/responder', [SolicitudAyudaController::class, 'responder'])->name('agente.solicitudes.responder');
});

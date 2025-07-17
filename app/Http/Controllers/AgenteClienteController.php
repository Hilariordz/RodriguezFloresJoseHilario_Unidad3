<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Viaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgenteClienteController extends Controller
{
    // Listar clientes
    public function index(Request $request)
    {
        $query = User::where('role', 'user');
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%")
                  ->orWhere('telefono', 'like', "%$search%")
                ;
            });
        }
        $clientes = $query->orderBy('name')->paginate(10);
        return view('agente.clientes', compact('clientes'));
    }

    // Formulario de creación
    public function create()
    {
        return view('agente.clientes-create');
    }

    // Guardar nuevo cliente
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'telefono' => 'nullable|string|max:20',
            'password' => 'required|string|min:6',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);
        return redirect()->route('agente.clientes.index')->with('success', 'Cliente creado correctamente.');
    }

    // Formulario de edición
    public function edit(User $cliente)
    {
        return view('agente.clientes-edit', compact('cliente'));
    }

    // Actualizar cliente
    public function update(Request $request, User $cliente)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $cliente->id,
            'telefono' => 'nullable|string|max:20',
            'password' => 'nullable|string|min:6',
        ]);
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        if ($request->filled('password')) {
            $cliente->password = Hash::make($request->password);
        }
        $cliente->save();
        return redirect()->route('agente.clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    // Eliminar cliente
    public function destroy(User $cliente)
    {
        $cliente->delete();
        return redirect()->route('agente.clientes.index')->with('success', 'Cliente eliminado correctamente.');
    }

    // Ver historial de viajes
    public function historial(User $cliente)
    {
        $viajes = Viaje::where('user_id', $cliente->id)->orderBy('created_at', 'desc')->get();
        return view('agente.clientes-historial', compact('cliente', 'viajes'));
    }
} 
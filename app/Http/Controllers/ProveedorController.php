<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    // Mostrar lista de proveedores
    public function index()
    {
        $proveedors = Proveedor::paginate(10);  // Asegúrate de paginar los proveedores
        return view('proveedor.index', compact('proveedors'));  // Asegurado que sea 'proveedor.index'
    }

    // Mostrar formulario para crear proveedor
    public function create()
    {
        return view('proveedor.create'); // Cambiado a 'proveedor.create'
    }

    // Guardar nuevo proveedor
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:proveedors',
        ]);

        Proveedor::create($request->all());
        return redirect()->route('proveedor.index')->with('success', 'Proveedor creado correctamente.');
    }

    // Mostrar un proveedor específico
    public function show(Proveedor $proveedor)
    {
        return view('proveedor.show', compact('proveedor')); // Cambiado a 'proveedor.show'
    }

    // Mostrar formulario de edición para un proveedor
    public function edit(Proveedor $proveedor)
    {
        return view('proveedor.edit', compact('proveedor')); // Cambiado a 'proveedor.edit'
    }

    // Actualizar proveedor en la base de datos
    public function update(Request $request, Proveedor $proveedor)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:proveedors,email,'.$proveedor->id,
        ]);

        $proveedor->update($request->all());
        return redirect()->route('proveedor.index')->with('success', 'Proveedor actualizado correctamente.');
    }

    // Eliminar proveedor de la base de datos
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedor.index')->with('success', 'Proveedor eliminado correctamente.');
    }
}

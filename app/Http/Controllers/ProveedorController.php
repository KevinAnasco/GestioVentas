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
        // Validación para asegurarnos de que todos los campos necesarios estén presentes
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:proveedors', // Verifica que el email sea único
            'telefono' => 'nullable',  // Teléfono puede ser nulo
            'direccion' => 'nullable',  // Dirección puede ser nula
            'descripcion' => 'nullable',  // Descripción también puede ser nula
        ]);

        // Guardar el proveedor, incluyendo la descripción si existe
        Proveedor::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'descripcion' => $request->descripcion,  // Incluir el campo descripción
        ]);

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
        // Validación para asegurarnos de que todos los campos necesarios estén presentes
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:proveedors,email,' . $proveedor->id, // Validación de correo único
            'telefono' => 'nullable',  // Teléfono puede ser nulo
            'direccion' => 'nullable',  // Dirección puede ser nula
            'descripcion' => 'nullable',  // Descripción puede ser nula
        ]);

        // Actualizar el proveedor, incluyendo la descripción
        $proveedor->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'descripcion' => $request->descripcion,  // Incluir el campo descripción
        ]);

        return redirect()->route('proveedor.index')->with('success', 'Proveedor actualizado correctamente.');
    }

    // Eliminar proveedor de la base de datos
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedor.index')->with('success', 'Proveedor eliminado correctamente.');
    }
}

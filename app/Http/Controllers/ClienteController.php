<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use App\Models\Cliente;
use Illuminate\Http\Request;



class ClienteController extends Controller
{
    /**
     * Constructor para aplicar middleware de permisos.
     */
    public function __construct()
    {
       // $this->middleware('can:cliente.create')->only(['create', 'store']);
        //$this->middleware('can:cliente.edit')->only(['edit', 'update']);
        //$this->middleware('can:cliente.delete')->only(['destroy']);
    }

    /**
     * Muestra una lista de clientes.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'ASC')->paginate(10);
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Muestra el formulario para crear un nuevo cliente.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Almacena un cliente recién creado en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'correo' => 'required|email|unique:clientes,correo',
            'telefono' => 'nullable|max:20',
            'direccion' => 'nullable|max:255',
        ]);

        // Crear una nueva instancia de Cliente y asignar los valores
        $cliente = new Cliente();
        $cliente->nombre = $validatedData['nombre'];
        $cliente->correo = $validatedData['correo'];
        $cliente->telefono = $validatedData['telefono'];
        $cliente->direccion = $validatedData['direccion'];

        // Guardar el cliente en la base de datos
        $cliente->save();

        // Redirigir a la lista de clientes con un mensaje de éxito
        return redirect()->route('cliente.index')->with('success', 'Cliente creado exitosamente');
    }

    /**
     * Muestra un cliente específico.
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('cliente'));
    }

    /**
     * Muestra el formulario para editar un cliente existente.
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Actualiza un cliente existente en la base de datos.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'correo' => 'required|email|unique:clientes,correo,' . $id,
            'telefono' => 'nullable|max:20',
            'direccion' => 'nullable|max:255',
        ]);

        // Buscar el cliente y actualizar sus datos
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $validatedData['nombre'];
        $cliente->correo = $validatedData['correo'];
        $cliente->telefono = $validatedData['telefono'];
        $cliente->direccion = $validatedData['direccion'];

        // Guardar los cambios
        $cliente->save();

        // Redirigir a la lista de clientes con un mensaje de éxito
        return redirect()->route('cliente.index')->with('success', 'Cliente actualizado exitosamente');
    }

    /**
     * Elimina un cliente de la base de datos.
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('cliente.index')->with('success', 'Cliente eliminado exitosamente');
    }
}

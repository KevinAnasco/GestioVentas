@extends('layouts.plantilla')

@section('contenido')
    {{-- mostrar formulario para crear nueva categoria --}}
    <div class= "container-formulario">
        <div class="card formulario">
            <h2>Ingresar Cliente</h2>
            <form action="{{ route('cliente.store') }}" method="POST">
    @csrf
    <!-- Campo Nombre -->
    <div class="form-group">
        <label for="nombre">Nombres y Apellidos del cliente</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>

    <!-- Campo Correo -->
    <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="text" id="correo" name="correo" required>
    </div>

    <!-- Campo Teléfono -->
    <div class="form-group">
        <label for="telefono">Número celular del cliente</label>
        <input type="text" id="telefono" name="telefono">
    </div>

    <!-- Campo Dirección -->
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" id="direccion" name="direccion">
    </div>

    <!-- Botón Guardar -->
    <div class="form-group">
        <button type="submit">Guardar Cliente</button>
    </div>
</form>
        </div>
        </div>
  
@endsection
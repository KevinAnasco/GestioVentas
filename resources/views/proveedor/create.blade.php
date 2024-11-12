@extends('layouts.plantilla')

@section('contenido')
    {{-- Mostrar formulario para crear nuevo proveedor --}}
    <div class="container-formulario">
        <div class="card formulario">
            <h2>Ingresar Proveedor</h2>
            <form action="{{ route('proveedor.store') }}" method="POST">
                @csrf
                <!-- Campo Nombre -->
                <div class="form-group">
                    <label for="nombre">Nombre del proveedor</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <!-- Campo Correo -->
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <!-- Campo Teléfono -->
                <div class="form-group">
                    <label for="telefono">Número de teléfono del proveedor</label>
                    <input type="text" id="telefono" name="telefono">
                </div>

                <!-- Campo Dirección -->
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion">
                </div>

                <!-- Botón Guardar -->
                <div class="form-group">
                    <button type="submit">Guardar Proveedor</button>
                </div>
            </form>
        </div>
    </div>
@endsection

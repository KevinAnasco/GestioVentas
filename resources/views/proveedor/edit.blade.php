@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Actualizar Proveedor</h2>
        <form action="{{ route('proveedor.update', $proveedor->id) }}" method="POST">
            {{-- Directiva para generar un token CSRF --}}
            @csrf

            {{-- Método PATCH para actualización --}}
            @method('PATCH')

            <!-- Campo Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre del proveedor</label>
                <input type="text" id="nombre" name="nombre" required value="{{ $proveedor->nombre }}">
            </div>

            <!-- Campo Correo -->
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" required value="{{ $proveedor->email }}">
            </div>

            <!-- Campo Teléfono -->
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" name="telefono" value="{{ $proveedor->telefono }}">
            </div>

            <!-- Campo Dirección -->
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <textarea id="direccion" name="direccion" rows="4">{{ $proveedor->direccion }}</textarea>
            </div>

            <!-- Botón Actualizar -->
            <div class="form-group">
                <button type="submit">Actualizar Datos</button>
            </div>
        </form>
    </div>
</div>
@endsection


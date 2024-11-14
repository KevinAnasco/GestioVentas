@extends('layouts.plantilla')

@section('contenido')
    
<section class="container-tabla">
    <h2 class="titulo-tabla">Detalles del Proveedor</h2>
    
    <div class="detalle-proveedor">
        <p><strong>ID:</strong> {{ $proveedor->id }}</p>
        <p><strong>Nombre:</strong> {{ $proveedor->nombre }}</p>
        <p><strong>Correo:</strong> {{ $proveedor->email }}</p>
        <p><strong>Teléfono:</strong> {{ $proveedor->telefono ?? 'Sin teléfono' }}</p>
        <p><strong>Dirección:</strong> {{ $proveedor->direccion ?? 'Sin dirección' }}</p>
        <p><strong>Descripción:</strong> {{ $proveedor->descripcion ?? 'Sin descripción' }}</p>
    </div>

    <div class="acciones">
        <!-- Volver a la lista de proveedores -->
        <a href="{{ route('proveedor.index') }}" class="btn-volver">Volver a la lista de proveedores</a>
        
        <!-- Opción de editar el proveedor -->
        <a href="{{ route('proveedor.edit', $proveedor->id) }}" class="btn-editar">Editar Proveedor</a>
    </div>
</section>

@endsection

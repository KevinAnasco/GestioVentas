@extends('layouts.plantilla')

@section('contenido')

<!-- Contenedor principal -->
<div class="factura-container">
    <h3 class="titulo-factura">Ventas Realizadas</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabla de ventas -->
    <table class="tabla-ventas">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->cliente->nombre }}</td>
                    <td>{{ $venta->created_at->format('d/m/Y') }}</td>
                    <td>${{ number_format($venta->total, 2) }}</td>
                    <td>
                        <a href="{{ route('venta.show', $venta->id) }}" class="btn btn-info">Ver Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    {{ $ventas->links() }}
</div>

@endsection

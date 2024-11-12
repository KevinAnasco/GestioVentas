@extends('layouts.plantilla')

@section('contenido')

<div class="venta-container">
    <h1 class="venta-h1">Nueva Venta</h1>
    <div id="productos-data" data-productos='@json($productos)'></div>

    <form action="{{ route('venta.store') }}" method="POST" class="needs-validation">
        @csrf

        <!-- Cliente -->
        <h2>Cliente</h2>
        <div class="venta-form-row">
            <div class="venta-form-group">
                <label for="documento" class="venta-form-label">Buscar Cliente</label>
                <input type="number" id="documento" name="documento" class="venta-form-control" value="0" min="0" step="5">
            </div>

            <div class="venta-form-group">
                <label for="cliente_id" class="venta-form-label">Cliente:</label>
                <select id="cliente_id" name="cliente_id" class="venta-form-select" required>
                    <option value="">Seleccionar Cliente</option>
                    @foreach($clientes as $cli)
                        <option value="{{ $cli->id }}">{{ $cli->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Pago -->
        <h2>Pago</h2>
        <div class="venta-form-row">
            <!-- Campo de Efectivo -->
            <div class="venta-form-group efectivo-group">
                <label for="efectivo" class="venta-form-label">Efectivo:</label>
                <input type="number" id="efectivo" name="efectivo" class="venta-form-control" value="0" min="0" step="5">
            </div>

            <!-- Campo de Cambio -->
            <div class="venta-form-group cambio-group">
                <label for="cambio" class="venta-form-label">Cambio:</label>
                <input type="number" id="cambio" name="cambio" class="venta-form-control" value="0" min="0" step="5" readonly>
            </div>
        </div>

        <!-- btn -->
        <h2>Detalles de Venta</h2>

            <!-- Contenedor para alinear el botón a la derecha -->
            <div class="venta-btn-container">
                <button type="submit" class="venta-btn">Generar Venta</button>
                </div>

        <!-- Descuento y Total -->
        <div class="venta-form-row">
            <div class="venta-form-group">
                <label for="descuento" class="venta-form-label">Descuento:</label>
                <input type="number" id="descuento" name="descuento" class="venta-form-control" value="0" min="0" step="5">
            </div>

            <div class="venta-form-group">
                <label for="total" class="venta-form-label">Total</label>
                <input type="number" id="total" name="total" class="total-form-control" value="0" min="0" step="5" readonly>
            </div>
        </div>

        <!-- Tabla de Detalles -->
        <div id="detalles">
            <table class="venta-table">
                <thead>
                    <tr>
                        <th class="venta-th">Producto</th>
                        <th class="venta-th">Cantidad</th>
                        <th class="venta-th">Precio de venta</th>
                        <th class="venta-th">Subtotal</th>
                        <th class="venta-th">Acciones</th>
                    </tr>
                </thead>
                <tbody id="detalle-body">
                    <tr class="venta-detalle">
                        <td>
                            <select class="venta-form-select" id="producto-select">
                                <option value="">Seleccionar Producto</option>
                                @foreach($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="number" id="cantidad" class="venta-form-control" required min="1" value="1">
                        </td>
                        <td>
                            <p id="precio-venta">0.0</p>
                        </td>
                        <td class="venta-subtotal">
                            <p id="subtotal-agregar">0.0</p>
                        </td>
                        <td>
                            <button type="button" id="agregar-detalle" class="venta-btn venta-btn-secondary">Agregar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>

@endsection

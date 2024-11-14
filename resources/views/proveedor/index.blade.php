@extends('layouts.plantilla')

@section('contenido')
    
<section class="container-tabla">
    <h2 class="titulo-tabla">Proveedores</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Descripción</th> <!-- Nueva columna de descripción -->
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody class="tabla-proveedores">
            @foreach ($proveedors as $proveedor)
            <tr>
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->email }}</td>
                <td>{{ $proveedor->telefono }}</td>
                <td>{{ $proveedor->direccion ?? 'Sin dirección' }}</td>
                
                <!-- Mostrar la descripción, si existe, de lo contrario mostrar 'Sin descripción' -->
                <td>{{ $proveedor->descripcion ?? 'Sin descripción' }}</td> 

                <td>
                    <!-- Ver proveedor -->
                    <a href="{{ route('proveedor.show', [$proveedor->id]) }}">
                        <img src="{{ asset('img/view.png') }}" alt="Ver proveedor">
                    </a>
                    
                    <!-- Editar proveedor -->
                    <a href="{{ route('proveedor.edit', [$proveedor->id]) }}">
                        <img src="{{ asset('img/edit.png') }}" alt="Editar proveedor">
                    </a>
                    
                    <!-- Eliminar proveedor -->
                    @can('proveedor.destroy')  <!-- Verificar si el usuario tiene permiso -->
                    <form action="{{ route('proveedor.destroy', [$proveedor->id]) }}" method="POST" onsubmit="return confirmarEliminacion()">
                        @csrf
                        @method('DELETE')
                        <input type="image" src="{{ asset('img/delete.png') }}" alt="Eliminar proveedor">
                    </form>
                    @endcan

                    <script>
                        function confirmarEliminacion() {
                            return confirm('¿Seguro deseas eliminar este proveedor?');
                        }
                    </script>
                </td>
            </tr>
            @endforeach           
        </tbody>
    </table>

    <!-- Paginación si es necesario -->
    <div class="nav-botones">
        {{ $proveedors->links() }} <!-- Paginación para proveedores -->
    </div>

</section>

@endsection

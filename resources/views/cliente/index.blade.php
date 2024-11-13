@extends('layouts.plantilla')

@section('contenido')
    
<section class="container-tabla">
    <h2 class="titulo-tabla"> Clientes</h2>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Direccion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody class ="tabla-clientes">
            @foreach ($clientes as $cliente)
            <tr>                
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->correo}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                
                
                <td >
                 <a href="{{route('cliente.show',[$cliente->id])}}">
                    <img src="{{asset('img/view.png')}}" alt="">
                 </a>
                 <a href="{{route('cliente.edit',[$cliente->id])}}">
                    <img src="{{asset('img/edit.png')}}" alt="">
                 </a>
                 <a href="{{route('cliente.destroy',[$cliente->id])}}">
                    
                 </a>
                 @can('cliente.destroy')
<form action="{{ route('cliente.destroy', [$cliente->id]) }}" method="POST" onsubmit="return confimarEliminacion()">
    @csrf
    @method('DELETE')
    <input type="image" src="{{ asset('img/delete.png') }}">
</form>
@endcan
                 <script>
                    function confimarEliminacion() {
                        return confirm('¿Seguro deseas eliminar?'); // Muestra el mensaje de confirmación
                    }
                </script>
                </td>                                
            </tr>
            @endforeach           
        </tbody>
    </table>

   </section>

@endsection
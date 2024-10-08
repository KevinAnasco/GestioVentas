@extends('layouts.plantilla')

@section('contenido')
    
<section class="container-tabla">
    <h2 class="titulo-tabla"> Categorias</h2>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                             
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>                
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->nombre}}</td>
                <td> {{$categoria->descripcion}}</td>
               
                
                <td >
                 <a href="{{route('categoria.show',[$categoria->id])}}">
                    <img src="{{asset('img/view.png')}}" alt="">
                 </a>
                 <a href="{{route('categoria.edit',[$categoria->id])}}">
                    <img src="{{asset('img/edit.png')}}" alt="">
                 </a>
                 <a href="{{route('categoria.destroy',[$categoria->id])}}">
                    
                 </a>
                 @can('categoria.destroy')
                 <form action="{{route('categoria.destroy',[$categoria->id])}}" method="POST" onsubmit="return confimarEliminacion()">

                    {{-- permite gemrar el token para enviar por post --}}
                    @csrf
                    {{-- agregar metodo delete --}}
                    @method('DELETE')
                    <input type="image"src="{{asset('img/delete.png')}}"></input>

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
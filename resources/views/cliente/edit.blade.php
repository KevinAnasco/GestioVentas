@extends('layouts.plantilla')

@section('contenido')
<div class= "container-formulario">
<div class="card formulario">
    <h2>Crear Nueva Categoría</h2>
    <form action="{{route('categoria.update',$categoria->id)}}" method="POST">
        {{-- agregar directica para qu se genere un token --}}
        @csrf

        {{-- agregar metodo patch --}}
        @method('PATCH')
        <!-- Campo Nombre -->
        <div class="form-group">
            <label for="nombre">Nombre de la Categoría</label>
            <input type="text" id="nombre" name="nombre" required value={{$categoria->nombre}}>
        </div>
        <!-- Campo Descripción -->
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4"
           >{{$categoria->descripcion}}</textarea>
        </div>
        <!-- Campo Status -->
        
        <!-- Botón Guardar -->
        <div class="form-group">
            <button type="submit">Actualizar Categoría</button>
        </div>
    </form>
</div>
</div>
@endsection
@extends('layouts.plantilla')

@section('contenido')
<div class= "container-formulario">
<div class="card formulario">
    <h2>Ingresar Nuevo Cliente</h2>
    <form action="{{route('cliente.update',$cliente->id)}}" method="POST">
        {{-- agregar directica para qu se genere un token --}}
        @csrf

        {{-- agregar metodo patch --}}
        @method('PATCH')
        <!-- Campo Nombre -->
        <div class="form-group">
            <label for="nombre">Nombre del cliente</label>
            <input type="text" id="nombre" name="nombre" required value={{$cliente->nombre}}>
        </div>
        <!-- Campo correo -->
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" id="telefono" name="telefono" required value={{$cliente->telefono}}>
        </div>
        <!-- Campo telefono -->
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo" required value={{$cliente->correo}}>
        </div>
        <!-- Campo direccion -->
        <div class="form-group">
            <label for="direccion">Direccion</label>
            <textarea id="direccion" name="direccion" rows="4"
           >{{$cliente->direccion}}</textarea>
        </div>
        <!-- Campo Status -->
        
        <!-- Botón Guardar -->
        <div class="form-group">
            <button type="submit">Actualizar Datos</button>
        </div>
    </form>
</div>
</div>


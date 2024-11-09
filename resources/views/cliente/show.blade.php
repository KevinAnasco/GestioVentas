@extends('layouts.plantilla')

@section('contenido')

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <div class="cabecera-text">
                <h2>{{$cliente->nombre}}</h2>
                <p> {{$cliente->telefono}}</p>
                <p> {{$cliente->direccion}}</p>
                <p> {{$cliente->correo}}</p>
            </div>  
    
        </div>
</section>
    
</div>
@endsection
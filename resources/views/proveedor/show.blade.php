@extends('layouts.plantilla')

@section('contenido')

<section class="container-cards">
    <div class="card">
        <div class="cabecera">
            <div class="cabecera-text">
                <h2>{{ $proveedor->nombre }}</h2>
                <p>{{ $proveedor->telefono }}</p>
                <p>{{ $proveedor->direccion }}</p>
                <p>{{ $proveedor->email }}</p>
            </div>  
        </div>
    </div>
</section>

@endsection

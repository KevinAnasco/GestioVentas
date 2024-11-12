@extends('layouts.plantilla')

@section('contenido')
   
   <section class="container-cards">
      <!-- productos -->
       <div class="card">
          <div class="cabecera">
              <img src="{{asset('img/agregar-producto.png')}}" alt="">
              <div class="cabecera-text">
                  <p>Total</p>
                  <h2>{{$totalProductos}}</h2>
              </div>
              <div class="cabecera-text">
               <p>Con Stock</p>
               <h2>{{$productosEnStock }}</h2>
           </div>
             
          </div>
          <h2>Productos</h2>
       </div>
        <!-- provedores -->
       <div class="card">
          <div class="cabecera">
              <img src="{{ asset('img/cadena-de-suministro.png') }}" alt="">
              <div class="cabecera-text">
                  <p>Total</p>
                  <h2>30</h2>
              </div>
             
          </div>
          <h2>Provedores</h2>
       </div>
        <!-- Categoria -->
        <div class="card">
         <div class="cabecera">
             <img src="{{asset('img/clasificacion.png')}}" alt="gkfg">
             <div class="cabecera-text">
                 <p>Total</p>
                 <h2>{{$totalCategorias}}</h2>
             </div>
             <div class="cabecera-text">
               <p>Activas</p>
             
           </div>
            
         </div>
         <h2>Categorias</h2>
      </div>
       <!-- Clientes -->
         
       <div class="card">
         <div class="cabecera">
             <img src="{{ asset('img/base-de-datos.png') }}" alt="">
             
             <div class="cabecera-text">
                 <p>Total</p>
                 <h2>{{$totalClientes}}</h2>
             </div>
             
            
         </div>
         <h2>Clientes</h2>
     </div>   
         <!-- Ventas -->
         
         <div class="card">
          <div class="cabecera">
              <img src="{{asset('img/compras.png')}}" alt="">
              <div class="cabecera-text">
                  <p>Total</p>
                  <h2>{{$totalVentas}}</h2>
              </div>
             
          </div>
          <h2>Ventas</h2>
      </div>   
      <!-- compras -->
      <div class="card">
          <div class="cabecera">
              <img src="{{asset('img/bolsa-de-la-compra.png')}}" alt="">
              <div class="cabecera-text">
                  <p>Total</p>
                  <h2>30</h2>
              </div>
             
          </div>
          <h2>Compras</h2>
       </div>
  </section >
@endsection
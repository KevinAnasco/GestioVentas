<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GestioVentas</title>
    <link rel="icon" href="{{asset('img/LogoA.png')}}" type="img/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos-tablas.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos-venta.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos-formularios.css')}}">
        <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
  <!-- slidebar   -->
   <aside class="slidebar" id="slidebar">
    <div class="logo">
        <img src="{{asset('img/LogoA.png')}}" alt="Logo Sigie">
        <a href="{{ route('dashboard') }}" style="text-decoration: none; color: inherit;">
           
        <span>GestioVentas</span>  

        </a>
    </div>
    
    <!-- PERFIL -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn profile">
         <span><img src="{{asset('img/administracion.png')}}" alt="avatar"></span>
         <p>{{Auth::user()->name}}</p>
        </div>
        <div class="element-slidebar-content">
            <a href="{{route('profile.edit')}}">Perfil</a>
            
            <form method="POST" action="{{ route('logout')}}">
                    @csrf

                  <input type="submit" value="Salir" class="logout-link">
                </form>

        </div>
    </div>

     <!-- Venta -->

     <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img src="{{asset('img/compras.png')}}" alt="Ventas"></span>
         <p>Venta</p>
        </div>
        <div class="element-slidebar-content">
   
        <a href="{{ route('venta.index') }}">Todos</a>
        <a href="{{ route('venta.create')}}">Nueva Venta</a>
    
 

    </div>



     <!-- Categorias -->
     <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img src="{{asset('img/clasificacion.png')}}" alt="Categoria"></span>
         <p>Categorias</p>
        </div>
        <div class="element-slidebar-content">

        <a href="{{route('categoria.index')}}">Gestionar Categoria</a>
            @can('categoria.create')
            <a href="{{route('categoria.create')}}">Nueva Categoria</a>
            @endcan

            

        </div>
    </div>
   

    <!-- Productos -->
    
    <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img src="{{asset('img/agregar-producto.png')}}" alt="Product"></span>
         <p>Productos</p>
        </div>
        <div class="element-slidebar-content">
        <div class="element-slidebar-content">
   
        <a href="{{ route('producto.create') }}">Agregar Producto</a>
        <a href="{{ route('producto.index')}}">Todos</a>
    
 

    </div>

        </div>
    </div>
   
    <!-- Proveedores -->
    <div class="element-slidebar">
        <div class="element-slidebar-btn">
         <span><img src="{{asset('img/cadena-de-suministro.png')}}" alt="Proveedor"></span>
         <p>Proveedores</p>
        </div>
        <div class="element-slidebar-content">
            <a href="">Nuevo Proveedor</a>
            <a href="">Gestionar Porveedores</a>

        </div>
        
       <!-- Clientes -->
<div class="element-slidebar">
    <div class="element-slidebar-btn">
        <span><img src="{{ asset('img/base-de-datos.png') }}" alt="Clientes"></span>
        <p>Clientes</p>
    </div>
    <div class="element-slidebar-content">
        <a href="{{ route('cliente.create') }}">Nuevo cliente</a>
        <a href="{{ route('cliente.index')}}">Gestionar Clientes</a>
    </div>
</div>
         <!-- Inventario -->
         <div class="element-slidebar">
            <div class="element-slidebar-btn">
             <span><img src="{{asset('img/inventario.png')}}" alt="Inventario"></span>
             <p>Inventario</p>
            </div>
            <div class="element-slidebar-content">
                <a href="">Generar Informe</a>  
    
            </div>
        </div>

    </div>
   </aside>

   <!-- main -->
   <main class="main">
    <!-- header -->
    <header class="header">
        <h2>Ventas</h2>
        <button id="menu-toggle" class="menu-hamburger">☰</button>
    </header>
    
<!-- graficas -->

<!-- modificado el 1/10/2024 -->
     
    <!-- Aqui todos los elementos cambientes -->
    @yield('contenido')

   </main>
   <script src="{{asset('js/ventas.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
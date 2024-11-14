
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login GestiVentas</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}">
            
        @csrf

            <h1 class="title">INICIO</h1>
            <div class="inp">
                <input type="email" name="email" id="" class="input" placeholder="E-mail">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input type="password" name="password" id="" class="input" placeholder="Contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            

            <button class="submit">Iniciar Sesion</button>

            
            <div class="opciones-login">
                    <label>
                        <input type="checkbox" name="remember">
                        Recordarme
                    </label>

                    @if (Route::has('password.request'))
               
                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>
            
            <p class="footer">¿No tienes cuenta?<a href="{{ route('register') }}" class="link">¿No tienes cuenta? Por favor, regístrate</a>
            </p>
            

            
        </form>
        <div></div>
        <div class="banner">
            <h1 class="wel_text">BIENVENIDO</h1>
            <p class="para">Sistema de Ventas e Inventario</p>

        </div>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda de Anime</title>
    <link rel="icon" href="{{ asset('Imagenes/Portada.jpeg') }}" type="image/jpeg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <header>
        <input type="checkbox" id="menu">
        <label for="menu">
            <span class="barras">≡</span>
            <span class="equis">x</span>
        </label>
        <section class="contenedor-nav">
            <div class="logo">
                <img src="{{ asset('Imagenes/Logo.jpeg') }}" alt="logo">
                <span>Geemiiniis Anime Shop</span>
            </div>
            <nav>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </section>
        <section class="textos-header">
            <h1>Bienvenidos a Geemiiniis Anime Shop</h1>
            <h2>Encuentra tus artículos favoritos de anime</h2>
            <a href="{{ route('login') }}">Iniciar sesión</a>
        </section>
    </header>

    <!-- Productos -->
    <section id="productos" class="productos">
        <h2>Nuestros Productos de Anime</h2>
        <div class="productos-grid">
            <div class="producto">
                <img src="{{ asset('Imagenes/Figuras.jpeg') }}" alt="Figuras de Anime">
                <h3>Figuras Anime</h3>
                <p>$15.00 - $100</p>
            </div>
            <div class="producto">
                <img src="{{ asset('Imagenes/Posters.jpeg') }}" alt="Poster Anime">
                <h3>Pósters Anime</h3>
                <p>$5.00 - $20.00</p>
            </div>
            <div class="producto">
                <img src="{{ asset('Imagenes/Camisetas.jpeg') }}" alt="Camiseta Anime">
                <h3>Camisetas Anime</h3>
                <p>$15.00</p>
            </div>
            <div class="producto">
                <img src="{{ asset('Imagenes/Mangas.jpeg') }}" alt="Mangas Anime">
                <h3>Mangas Anime</h3>
                <p>$5.00</p>
            </div>
        </div>
    </section>

    <!-- Sobre Nosotros -->
    <section class="contenedor-sobre-nosotros">
        <h2 class="tituloo">Acerca de Nosotros</h2>
        <div class="contenedor-sobre-nosotros">
            <img class="img-nuestro-producto" src="{{ asset('Imagenes/PostPortada.jpeg') }}" alt="Sobre Nosotros">
            <div class="contenido-textos">
                <h3><span>1</span> Artículos Exclusivos</h3>
                <p>Ofrecemos productos únicos y exclusivos de tus series y películas de anime favoritas.</p>
                <h3><span>2</span> Calidad Garantizada</h3>
                <p>Todos nuestros productos son de la más alta calidad, asegurando la satisfacción de nuestros clientes.</p>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="testimonios">
        <h2>Lo que dicen nuestros clientes</h2>
        <div class="carrusel1">
            <div class="carrusel-track">
                <div class="testimonio">
                    <p>"Gran variedad de productos de anime, excelente calidad."</p>
                    <cite>Sofia Romero</cite>
                </div>
                <div class="testimonio">
                    <p>"Los mejores precios y un servicio al cliente excepcional."</p>
                    <cite>Juan Pérez</cite>
                </div>
                <div class="testimonio">
                    <p>"Encuentro todos los artículos que busco, siempre actualizados."</p>
                    <cite>Ana Gómez</cite>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacto -->
    <section id="contacto" class="contacto">
        <h2>Contacto</h2>
        <p>Para más información, contáctanos al número de celular: <a href="tel:+1234567890">+57 3028351006</a></p>
        <form action="#" method="post" class="formulario-contacto">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy;2024 Geemiiniis Anime Shop. Todos los derechos reservados.</p>
        <div class="footer-links">
            <a href="">Política de Privacidad</a>
            <a href="">Términos y condiciones</a>
            <a href="#contacto">Contacto</a>
        </div>
    </footer>
</body>
</html>
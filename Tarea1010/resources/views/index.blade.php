<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Sitio Web</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <header>
        <h1>Bienvenido a mi sitio</h1>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h2>Diseño con CSS</h2>
            <p>Este es un ejemplo de maquetación en Laravel.</p>
            <button class="btn">Haz clic aquí</button>
        </section>

        <section class="servicios">
            <article>
                <h3>Servicio 1</h3>
                <p>Descripción del servicio</p>
            </article>
            <article>
                <h3>Servicio 2</h3>
                <p>Descripción del servicio</p>
            </article>
            <article>
                <h3>Servicio 3</h3>
                <p>Descripción del servicio</p>
            </article>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Mi Sitio Web</p>
    </footer>
</body>
</html>

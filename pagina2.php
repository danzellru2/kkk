<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería El Buen Gusto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <style>
            .carousel-item img {
            height: 300px; /* Altura personalizada para las imágenes del carrusel */
            object-fit: cover; /* Ajusta la imagen para cubrir completamente el área del contenedor */
        }
    </style>
</head>
<body>
    <header>
        <h1>Panadería El Buen Gusto</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="inicio.php">Iniciar session</a> </li>
                <li><a href="registro.php">registrarse</a> </li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <!-- Agrega más indicadores según sea necesario -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img de panes/conchas.jpg" class="d-block w-100" alt="Producto 1">
                </div>
                <div class="carousel-item">
                    <img src="img de panes/panesvarios.jpg" class="d-block w-100" alt="Producto 2">
                </div>
                <!-- Agrega más elementos de carrusel según sea necesario -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>

       <center> <h2>Nuestros Productos</h2></center>
        <section class="productos">
        <div class="producto">
                <img src="pan1.jpg" alt="Pan Fresco">
                <h3>Pan Fresco</h3>
                <p>Delicioso pan recién horneado todos los días.</p>
                <p class="precio">$2.50</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="producto">
                <img src="pan1.jpg" alt="Pan Fresco">
                <h3>Pan Fresco</h3>
                <p>Delicioso pan recién horneado todos los días.</p>
                <p class="precio">$2.50</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="producto">
                <img src="pan1.jpg" alt="Pan Fresco">
                <h3>Pan Fresco</h3>
                <p>Delicioso pan recién horneado todos los días.</p>
                <p class="precio">$2.50</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="producto">
                <img src="pan1.jpg" alt="Pan Fresco">
                <h3>Pan Fresco</h3>
                <p>Delicioso pan recién horneado todos los días.</p>
                <p class="precio">$2.50</p>
                <button>Agregar al Carrito</button>
            </div>
            <div class="producto">
                <img src="pan1.jpg" alt="Pan Fresco">
                <h3>Pan Fresco</h3>
                <p>Delicioso pan recién horneado todos los días.</p>
                <p class="precio">$2.50</p>
                <button>Agregar al Carrito</button>
            </div>
            <!-- Aquí van los productos -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Panadería El Buen Gusto - Todos los derechos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

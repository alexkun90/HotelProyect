<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Home <span
                                    class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./todo_incluido.php">Todo Incluido</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./alojamiento.php">Alojamiento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./eventos.php">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./galeria.php">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./cerrar_sesion.php">Cerrar Sesion</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="../img/photo4.jpg" class="w-100 d-block" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="../img/photo2.jpg" class="w-100 d-block" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="../img/photo3.jpg" class="w-100 d-block" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var myCarousel = new bootstrap.Carousel(document.getElementById('carouselId'), {
            interval: 3000,
            wrap: true
        });
    });
    </script>
    <div class="contenido-centrado">
        <h2>Un refugio familiar en Costa Rica</h2>
        <p>
            Cuando llegue al Resort Todo Incluido, se encontrará con un paraíso en la playa,
            rodeado de exuberantes jardines tropicales, seis piscinas y una playa de arena volcánica
            de tono oscuro que se extiende hasta un brillante océano Pacífico. Aquí, encontrará una amplia
            gama de actividades para toda la familia, desde tenis y vóley playa hasta un relajante spa,
            un anfiteatro y clubes dedicados a niños y adolescentes.
        </p>
        <p>
            Perfectas para familias, parejas y grupos diversos, nuestras 408 habitaciones y suites capturan
            la belleza de su entorno con espacios amplios y llenos de luz, además de un diseño y decoración
            alegres. Todo ello se realza con balcones privados que ofrecen vistas al mar, la piscina o los hermosos
            jardines.
        </p>
        <p>
            Le invitamos a descubrir el Resort, donde todo está incluido y nada se interpone entre usted y unas
            vacaciones inolvidables en la costa de Costa Rica.
        </p>
    </div>
    <div class="seccion-imagen">
        <div class="imagen-cuadrada">
            <img src="../img/habitacion.jpg" alt="Imagen Habitacion">
        </div>
        <div class="texto-referencia">
            <h2>HABITACIONES</h2>
            <br>
            <p>
                Nuestras habitaciones de lujo ofrecen una experiencia única y reconfortante para nuestros huéspedes
                exigentes.
                Cada habitación ha sido cuidadosamente diseñada para brindar el máximo confort y elegancia.
            </p>
            <p>
                Con una vista impresionante al mar y todas las comodidades modernas, nuestras habitaciones son el
                refugio perfecto
                para relajarse y disfrutar de unas vacaciones inolvidables.
            </p>
        </div>
    </div>
    <div class="seccion-imagen">
        <div class="imagen-cuadrada">
            <img src="../img/restaurante.jpg" alt="Imagen Restaurante">
        </div>
        <div class="texto-referencia">
            <h2>RESTAURANTES</h2>
            <br>
            <p>
                Nuestros restaurantes ofrecen una amplia variedad de opciones gastronómicas para todos los gustos.
                Desde cocina internacional hasta platos locales, nuestros restaurantes ofrecen una experiencia
                culinaria única.
            </p>
            <p>
                Nuestros chefs se esfuerzan por ofrecer una experiencia gastronómica única, utilizando ingredientes
                frescos y locales para crear platos que deleitarán a los paladares más exigentes.
            </p>
        </div>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Hotel La Avenida</h5>
                    <p>
                        Hotel La Avenida es tu destino perfecto para unas vacaciones inolvidables. Nuestro hotel de lujo
                        te ofrece comodidades excepcionales, impresionantes vistas al mar y una experiencia gastronómica
                        inigualable. Sumérgete en la belleza de Costa Rica y relájate en nuestro oasis tropical.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h5 class="text-uppercase mb-3 text-end">Links</h5>
                    <ul class="list-unstyled text-end">
                        <li>
                            <a href="#!" class="text-dark">Ubicacion</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Contacto</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Politicas de Privacidad</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">Boletin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 My Website
        </div>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Inicio</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <!-- Encabezado con el nombre de la empresa y menú de navegación -->
    <header class="bg-primary text-white text-center py-4">
        <div class="container">
            <h1 class="display-4">TechSolutions</h1>
            <p class="lead">Innovación y Tecnología para tu Empresa</p>
        </div>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="contacto.php">TechSolutions</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="team.php">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sección de presentación de la empresa -->
    <div class="container my-5">
        <section class="row text-center align-items-center">
            <!-- Consultoría -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/pexels-startup-stock-photos-7374.jpg" class="card-img-top img-fluid" alt="Consultoría">
                    <div class="card-body">
                        <h3 class="card-title">Consultoría</h3>
                        <p class="card-text">Ofrecemos asesoría estratégica para optimizar tu infraestructura tecnológica y mejorar tus procesos de negocio.</p>
                    </div>
                </div>
            </div>
            <!-- Desarrollo de Software -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/pexels-pixabay-270360.jpg" class="card-img-top img-fluid" alt="Desarrollo de Software">
                    <div class="card-body">
                        <h3 class="card-title">Desarrollo de Software</h3>
                        <p class="card-text">Desarrollamos soluciones de software a medida para impulsar la eficiencia y la competitividad de tu empresa.</p>
                    </div>
                </div>
            </div>
            <!-- Seguridad Informática -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/seguridad-2.jpg.webp" class="card-img-top img-fluid" alt="Seguridad Informática">
                    <div class="card-body">
                        <h3 class="card-title">Seguridad Informática</h3>
                        <p class="card-text">Protege tus datos y sistemas con nuestras avanzadas soluciones de seguridad informática.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Área destacada con testimonios de clientes utilizando un carrusel -->
        <section class="my-5">
            <h3 class="text-center mb-4">Testimonios de Clientes</h3>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/istockphoto-1332358775-612x612.jpg" class="d-block w-100" alt="Cliente Satisfecho">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cliente Satisfecho</h5>
                            <p>TechSolutions mejoró nuestra infraestructura tecnológica, permitiéndonos crecer de manera sostenible.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/tecnicasatencionaclientes.webp" class="d-block w-100" alt="Cliente Agradecido">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cliente Agradecido</h5>
                            <p>¡El mejor soporte y servicio que hemos recibido! Recomendaría TechSolutions sin dudarlo.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/cliente-feliz-cliente-satisfecho-perder-un-cliente-w-min-1024x529.jpg" class="d-block w-100" alt="Cliente Feliz">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cliente Feliz</h5>
                            <p>Gracias a TechSolutions, nuestra empresa ha crecido significativamente y ahora somos más competitivos en el mercado.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </section>
    </div>

    <script src="./js/bootstrap.min.js"></script>
</body>
</html>

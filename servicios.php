<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Servicios</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Incluye Font Awesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Personaliza las tarjetas */
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        /* Espaciado entre tarjetas */
        .card-title {
            color: #007bff;
        }
        .testimonial {
            margin-top: 50px;
        }
        .testimonial .icon {
            font-size: 50px;
            color: #007bff;
        }
        .testimonial p {
            font-style: italic;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Servicios</h1>
        <p>Innovación y tecnología para tu empresa</p>
    </header>

    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">TechSolutions</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
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

    <!-- Sección de Servicios utilizando tarjetas de Bootstrap -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/pexels-artempodrez-5716001.jpg" class="card-img-top" alt="Consultoría">
                    <div class="card-body">
                        <h5 class="card-title">Consultoría</h5>
                        <p class="card-text">Soluciones estratégicas para optimizar tu infraestructura tecnológica.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/mikhail-fesenko-p6YWrjhmjhM-unsplash.jpg" class="card-img-top" alt="Desarrollo de Software">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo de Software</h5>
                        <p class="card-text">Creamos software a medida para impulsar tu negocio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/technology-7111760_1280.jpg" class="card-img-top" alt="Seguridad Informática">
                    <div class="card-body">
                        <h5 class="card-title">Seguridad Informática</h5>
                        <p class="card-text">Protege tus datos y sistemas con nuestras soluciones de seguridad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de testimonios de clientes con tarjetas -->
    <div class="container my-5">
        <h2 class="text-center">Testimonios de Clientes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center mb-4">
                    <div class="card-body">
                        <i class="fas fa-user icon"></i>
                        <p class="card-text">"TechSolutions nos ayudó a mejorar nuestra infraestructura tecnológica, ¡increíble servicio!"</p>
                        <strong>- Cliente A</strong><br>
                        <span>CEO de Empresa A</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-4">
                    <div class="card-body">
                        <i class="fas fa-user icon"></i>
                        <p class="card-text">"El equipo de desarrollo de software es altamente profesional, 100% recomendados."</p>
                        <strong>- Cliente B</strong><br>
                        <span>CTO de Empresa B</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb-4">
                    <div class="card-body">
                        <i class="fas fa-user icon"></i>
                        <p class="card-text">"Gracias a sus soluciones de seguridad informática, nuestros datos están protegidos."</p>
                        <strong>- Cliente C</strong><br>
                        <span>Gerente de IT de Empresa C</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Proyectos recientes -->
    <div class="container my-5">
        <h2 class="text-center">Proyectos Recientes</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/campaign-creators-pypeCEaJeZY-unsplash.jpg" class="card-img-top" alt="Proyecto 1">
                    <div class="card-body">
                        <h5 class="card-title">Proyecto A</h5>
                        <p class="card-text">Implementación de una solución de ciberseguridad para proteger datos de cliente.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/annie-spratt-QckxruozjRg-unsplash.jpg" class="card-img-top" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title">Proyecto B</h5>
                        <p class="card-text">Desarrollo de software personalizado para optimizar los procesos de negocio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="img/thisisengineering-w_zE6qlkQKA-unsplash.jpg" class="card-img-top" alt="Proyecto 3">
                    <div class="card-body">
                        <h5 class="card-title">Proyecto C</h5>
                        <p class="card-text">Consultoría tecnológica para la expansión de infraestructura digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>

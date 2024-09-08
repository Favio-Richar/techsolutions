<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Equipo</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Incluye Font Awesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            margin-bottom: 30px;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-img-top {
            height: 300px;
            object-fit: cover;
        }
        .social-icons i {
            font-size: 20px;
            color: #007bff;
            margin-right: 10px;
        }
        .social-icons i:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Nuestro Equipo</h1>
        <p>Conoce a las personas que hacen posible nuestras soluciones tecnológicas</p>
    </header>

    <!-- Menú de navegación -->
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">TechSolutions</a>
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

    <!-- Sección del equipo utilizando tarjetas y rejilla de Bootstrap -->
    <div class="container my-5">
        <div class="row">
            <!-- Miembro 1 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card text-center">
                    <img src="img/austin-distel-uPK2TbJlvMQ-unsplash.jpg" class="card-img-top" alt="Miembro 1">
                    <div class="card-body">
                        <h5 class="card-title">Juan Pérez</h5>
                        <p class="card-text">CEO & Fundador</p>
                        <p>Juan es un líder visionario con más de 15 años de experiencia en el sector tecnológico. Se especializa en la transformación digital de empresas y la implementación de soluciones tecnológicas innovadoras.</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/juanperez" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="mailto:juan@techsolutions.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Miembro 2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card text-center">
                    <img src="img/istockphoto-2163198115-612x612.webp" class="card-img-top" alt="Miembro 2">
                    <div class="card-body">
                        <h5 class="card-title">Ana Gómez</h5>
                        <p class="card-text">CTO</p>
                        <p>Ana es la responsable de la arquitectura tecnológica en TechSolutions, con un enfoque en ciberseguridad y desarrollo de software a gran escala. Tiene un enfoque en innovación y eficiencia.</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/anagomez" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="mailto:ana@techsolutions.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Miembro 3 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card text-center">
                    <img src="img/premium_photo-1661371243525-d02768a7feee.avif" class="card-img-top" alt="Miembro 3">
                    <div class="card-body">
                        <h5 class="card-title">Carlos López</h5>
                        <p class="card-text">Desarrollador Senior</p>
                        <p>Carlos tiene más de 10 años de experiencia en el desarrollo de software, especializado en aplicaciones móviles y soluciones en la nube. Es un apasionado del código limpio y eficiente.</p>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/carloslopez" target="_blank"><i class="fab fa-linkedin"></i></a>
                            <a href="mailto:carlos@techsolutions.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>

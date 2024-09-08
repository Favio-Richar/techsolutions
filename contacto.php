<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Contacto</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .form-container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .social-icons i {
            font-size: 20px;
            color: #007bff;
            margin-right: 10px;
        }
        .social-icons i:hover {
            color: #0056b3;
        }
        .map-container {
            height: 400px;
            width: 100%;
            margin-bottom: 30px;
        }
        .contact-info {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Encabezado -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Contacto</h1>
        <p>Ponte en contacto con nosotros para más información</p>
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

    <!-- Sección de contacto en una columna -->
    <div class="container my-5">
        <!-- Formulario de contacto -->
        <div class="form-container">
            <h2 class="text-center">Formulario de Contacto</h2>
            <form action="send_contact.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
            </form>
        </div>

        <!-- Información de contacto -->
        <div class="contact-info text-center">
            <h2>Información de Contacto</h2>
            <p><strong>Dirección:</strong> Calle Falsa 123, Ciudad, País</p>
            <p><strong>Teléfono:</strong> +1 234 567 890</p>
            <p><strong>Email:</strong> info@techsolutions.com</p>
            <p><strong>Horario:</strong> Lunes a Viernes, 9:00 AM - 6:00 PM</p>
        </div>

        <!-- Redes sociales -->
        <div class="text-center mb-4">
            <h2>Síguenos en redes sociales</h2>
            <div class="social-icons">
                <a href="https://www.facebook.com/TechSolutions" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/TechSolutions" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/TechSolutions" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>

        <!-- Mapa interactivo -->
        <h2 class="text-center">Nuestra Ubicación</h2>
        <div class="map-container mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.837299782098!2d144.95373631549195!3d-37.81627974201357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727d3e374a69fd!2sVictoria%20Market!5e0!3m2!1sen!2sus!4v1615020153747!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>

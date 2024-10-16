<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Paquete Básico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('imagenes/logo belen.png') }}" alt="Logo de Belén Fotografías" width="50" height="50" class="logo">
                    Belén Fotografías
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/paquetes') }}">Paquetes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/equipo') }}">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sección del Paquete Básico -->
    <section class="paquete-basico bg-danger text-light py-5">
        <div class="container">
            <h2 class="text-center">Paquete Básico</h2>
            <p class="text-center">Perfecto para parejas que les gusta lo privado y desean pasar su día especial con sus seres queridos más cercanos.</p>

            <div class="row mt-4">
                <div class="col-md-6">
                    <h3>Servicio de Fotografía</h3>
                    <p>Cubre la boda religiosa, sesión de fotos (paseo) y recepción. Se enviará entre 180 y 220 fotografías digitales por correo electrónico, editadas y colorizadas profesionalmente. El material se entregará 5 días después del evento.</p>
                </div>
                <div class="col-md-6">
                    <h3>Servicio de Filmación</h3>
                    <p>Cubre la boda religiosa, sesión de fotos y recepción. El audio es captado desde la consola para una mejor calidad. Se entregará un DVD con la carátula personalizada y un video editado con duración aproximada de 1 h 30 m a 2 h, grabado en 4K.</p>
                    <p>Incluye un video resumen con las escenas más significativas para compartir en redes sociales, también en calidad 4K. El material se entregará 10 días después del evento.</p>
                </div>
            </div>

            <div class="mt-4">
                <h3>Equipo de Trabajo</h3>
                <ul>
                    <li>1 Fotógrafo</li>
                    <li>1 Videógrafo</li>
                    <li>1 Asistente</li>
                </ul>
            </div>

            <div class="mt-4">
                <h3>Presupuesto de Inversión Total</h3>
                <p>Servicio de fotografía: S/. 550</p>
                <p>Total: S/. 1120</p>
                <small class="text-muted">Nota: El precio no incluye movilidad.</small>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom py-5 bg-dark text-light">
        <div class="container text-center">
            <p>&copy; 2024 Belén Fotografías. Todos los derechos reservados.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/BelenFotografias18" target="_blank"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a>
                <a href="https://www.instagram.com/belen_fotografias/" target="_blank"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
                <a href="https://api.whatsapp.com/send/?phone=%2B51970446814&text&app_absent=0" target="_blank"><i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio - Belén Fotografías</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Google Fonts -->
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
                        <li class="nav-item"><a class="nav-link" href="https://linktr.ee/belen_fotografias" target="_blank">Redes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sección Hero -->
    <section class="hero text-center py-5">
        <div class="container">
            <h1 class="display-4 text-white">Nuestro Portafolio</h1>
            <p class="lead text-white">Explora nuestros trabajos destacados y captura tus momentos especiales.</p>
        </div>
    </section>

    <!-- Sección de Proyectos -->
    <section class="container py-5">
        <h2 class="text-center mb-4">Proyectos Destacados</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('imagenes/portafolio/portafolio1.jpg') }}" class="card-img-top" alt="Proyecto 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">Boda en la Playa</h5>
                        <p class="card-text">Una hermosa ceremonia frente al mar.</p>
                        <a href="#" class="btn btn-primary w-100">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('imagenes/portafolio/portafolio2.jpg') }}" class="card-img-top" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sesión de Pareja</h5>
                        <p class="card-text">Capturando momentos únicos en pareja.</p>
                        <a href="#" class="btn btn-primary w-100">Ver Más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('imagenes/portafolio/portafolio3.jpg') }}" class="card-img-top" alt="Proyecto 3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Bautizo</h5>
                        <p class="card-text">Un día especial lleno de emociones.</p>
                        <a href="#" class="btn btn-primary w-100">Ver Más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Reseñas -->
    <section class="bg-light py-5">
        <div class="container">
            <h3 class="text-center mb-4">Lo que dicen nuestros clientes</h3>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <p>"Un servicio excepcional y unas fotos increíbles. ¡Recomendados!"</p>
                    <h5>- Cliente Satisfecho</h5>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <p>"Capturaron cada momento de nuestra boda. Gracias, Belén Fotografías."</p>
                    <h5>- Feliz Novia</h5>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <p>"El mejor equipo de fotógrafos. ¡Las fotos son un tesoro!"</p>
                    <h5>- Padre del Bautizado</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom py-5 bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> Jr Lucanas 683, La Victoria, Lima, Lima</li>
                        <li><i class="bi bi-telephone-fill"></i> +51 999 999 999</li>
                        <li><i class="bi bi-envelope-fill"></i> info@belenfotografias.com</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Enlaces Útiles</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/') }}" class="text-light">Inicio</a></li>
                        <li><a href="{{ url('/nosotros') }}" class="text-light">Nosotros</a></li>
                        <li><a href="{{ url('/paquetes') }}" class="text-light">Paquetes</a></li>
                        <li><a href="{{ url('/equipo') }}" class="text-light">Equipo</a></li>
                        <li><a href="{{ url('/contacto') }}" class="text-light">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4 text-center">
                    <h5>Síguenos</h5>
                    <a href="https://www.instagram.com/belen_fotografias/" target="_blank" class="text-light mx-2"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
                    <a href="https://www.facebook.com/BelenFotografias18" target="_blank" class="text-light mx-2"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=%2B51970446814&text&app_absent=0" target="_blank" class="text-light mx-2"><i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
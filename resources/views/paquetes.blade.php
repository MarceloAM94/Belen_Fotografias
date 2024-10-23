<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belén Fotografías</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Iconos --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="imagenes/logo belen.png" alt="Logo de Belén Fotografías" width="50" height="50" class="logo">
                    Belén Fotografías
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/paquetes') }}">Paquetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/equipo') }}">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://linktr.ee/belen_fotografias" target="_blank">Redes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contacto') }}">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Carousel -->
    <section id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('imagenes/carrusel/carrusel1.jpg') }}" class="d-block w-100" alt="Fotografía de boda">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Belén Fotografías</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/carrusel/carrusel2.jpg') }}" class="d-block w-100" alt="Fotografía de recién casados">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Momentos Únicos</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/carrusel/carrusel3.jpg') }}" class="d-block w-100" alt="Fotografía de pareja en boda">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Captura de Recuerdos</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </section>

    <!-- Sección de presentación -->
    <section class="presentation-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Belén Fotografías</h2>
            <p class="lead mb-4">Queridos novios,</p>
            <p>Es un honor para mí presentarme como Belén Espinoza, fotógrafa especializada en capturar los momentos más hermosos y significativos de su día especial. Con una trayectoria de seis años en la industria de bodas, he tenido el privilegio de ser testigo y documentar innumerables historias de amor en toda su diversidad y belleza.</p>
            <p>Mi equipo y yo nos esforzamos por ofrecer un servicio personalizado y de alta calidad que se adapte a las necesidades y deseos de cada pareja.</p>
            <p class="signature">Con cariño,<br>Belén Espinoza</p>
        </div>
    </section>

    <!-- Sección de Paquetes -->
    <section class="container py-5">
        <h2 class="text-center mb-5">Nuestros Paquetes</h2>

        <div class="row">
            <!-- Paquete Básico -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center">Paquete Básico</h3>
                        <p class="text-muted text-center">Ideal para bodas íntimas.</p>
                        <p><strong>Incluye:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill"></i> Boda religiosa</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sesión de fotos (paseo)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Recepción</li>
                        </ul>
                        <h4 class="text-center">s/. 1120</h4>
                    </div>
                    <div class="card-footer text-center bg-transparent">
                        <a href="{{ url('/paquete-basico') }}" class="btn btn-outline-danger">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- Paquete Intermedio -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center">Paquete Intermedio</h3>
                        <p class="text-muted text-center">Para parejas que desean algo más completo.</p>
                        <p><strong>Incluye:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill"></i> Boda Civil y religiosa</li>
                            <li><i class="bi bi-check-circle-fill"></i> Sesión de fotos pre y post boda</li>
                            <li><i class="bi bi-check-circle-fill"></i> Recepción</li>
                            <li><i class="bi bi-check-circle-fill"></i> Cuadro de firmas</li>
                        </ul>
                        <h4 class="text-center">s/. 1570</h4>
                    </div>
                    <div class="card-footer text-center bg-transparent">
                        <a href="{{ url('/paquete-intermedio') }}" class="btn btn-outline-danger">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- Paquete Completo -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h3 class="card-title text-center">Paquete Completo</h3>
                        <p class="text-muted text-center">El paquete más completo para capturar cada momento.</p>
                        <p><strong>Incluye:</strong></p>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-circle-fill"></i> Boda Civil y religiosa</li>
                            <li><i class="bi bi-check-circle-fill"></i> Pre-boda y post-boda</li>
                            <li><i class="bi bi-check-circle-fill"></i> Filmación con dron</li>
                            <li><i class="bi bi-check-circle-fill"></i> Photobook</li>
                        </ul>
                        <h4 class="text-center">s/. 3500</h4>
                    </div>
                    <div class="card-footer text-center bg-transparent">
                    <a href="{{ url('/paquete-completo') }}" class="btn btn-outline-danger">Ver Detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom py-5 bg-dark text-light">
        <div class="container">
            <div class="row">
                <!-- Información de contacto -->
                <div class="col-md-4 mb-4">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> Jr Lucanas 683, La Victoria, Lima, Lima</li>
                        <li><i class="bi bi-telephone-fill"></i> +51 999 999 999</li>
                        <li><i class="bi bi-envelope-fill"></i> info@belenfotografias.com</li>
                    </ul>
                </div>

                <!-- Enlaces útiles -->
                <div class="col-md-4 mb-4">
                    <h5>Enlaces Útiles</h5>
                    <ul class="list-unstyled">
                        <li><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                        <li><a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a></li>
                        <li><a class="nav-link" href="{{ url('/paquetes') }}">Paquetes</a></li>
                        <li><a class="nav-link" href="{{ url('/equipo') }}">Equipo</a></li>
                        <li><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                    </ul>
                </div>

                <!-- Redes sociales -->
                <div class="col-md-4 mb-4 text-center">
                    <h5>Síguenos</h5>
                    <a href="https://www.instagram.com/belen_fotografias/" target="_blank" class="text-light mx-2"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
                    <a href="https://www.facebook.com/BelenFotografias18" target="_blank" class="text-light mx-2"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=%2B51970446814&text&app_absent=0" target="_blank" class="text-light mx-2"><i class="bi bi-whatsapp" style="font-size: 1.5rem;"></i></a>
                </div>
            </div>
            <hr class="border-light">
            <div class="text-center">
                <p class="mb-0">© 2024 Belén Fotografías. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>

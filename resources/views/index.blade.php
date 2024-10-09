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
                    <img src="{{ asset('imagenes/logo belen.png') }}" alt="Logo de Belén Fotografías" width="50" height="50" class="logo">
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
                <img src="{{ asset('imagenes/marriage-4226896_1280.jpg') }}" class="d-block w-100" alt="Fotografía de boda">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Belén Fotografías</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/newlyweds-7201462_1280.jpg') }}" class="d-block w-100" alt="Fotografía de recién casados">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Momentos Únicos</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('imagenes/wedding-1353829_1280.jpg') }}" class="d-block w-100" alt="Fotografía de pareja en boda">
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

    <!-- Sección de Bienvenida -->
    <section class="text-center py-5 bg-danger text-white">
        <div class="container">
            <h2 class="mb-3">Bienvenido a Belén Fotografías</h2>
            <p>Fotografía y filmación para eventos sociales</p>
        </div>
    </section>

    <!-- Proyectos destacados -->
    <section class="container py-5">
        <h3 class="text-center mb-4">Descubre nuestros paquetes de bodas:</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/wedding-540905_1280.jpg') }}" class="card-img-top" alt="Filmación de bodas">
                    <div class="card-body">
                        <h5 class="card-title text-center">Filmación de Bodas</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/wedding-7335258_1280.jpg') }}" class="card-img-top" alt="Filmación de eventos sociales">
                    <div class="card-body">
                        <h5 class="card-title text-center">Filmación de Eventos Sociales</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('imagenes/woman-4081760_1280.jpg') }}" class="card-img-top" alt="Edición de videos">
                    <div class="card-body">
                        <h5 class="card-title text-center">Edición de Video y Fotografía</h5>
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
                        <li><i class="bi bi-geo-alt-fill"></i> Jr Lucanas 683, La Victoria, Ciudad, País</li>
                        <li><i class="bi bi-telephone-fill"></i> +51 999 999 999</li>
                        <li><i class="bi bi-envelope-fill"></i> info@belenfotografias.com</li>
                    </ul>
                </div>

                <!-- Enlaces útiles -->
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

                <!-- Redes sociales -->
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

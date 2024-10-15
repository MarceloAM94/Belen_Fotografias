<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo - Belén Fotografías</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
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
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.html">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="paquetes.html">Paquetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="equipo.html">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://linktr.ee/belen_fotografias" target="_blank">Redes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sección "Nuestro Equipo" -->
    <section class="team py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Nuestro Equipo</h2>
            
            <div class="row text-center justify-content-center">
                <!-- Fila 1: Miembro 1 y 2 -->
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="imagenes/abel.jpg" alt="Abel Espinoza" class="rounded-circle mx-auto mt-4 team-img" width="200" height="200">
                        <div class="card-body">
                            <h4 class="card-title">Abel Espinoza</h4>
                            <p class="card-text">Fotógrafo y Editor</p>
                            <p class="text-muted">Su dominio de las técnicas de filmación y edición nos permite entregar contenido visual impactante.</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="https://www.instagram.com" class="btn btn-outline-danger mx-2"><i class="bi bi-instagram"></i> Instagram</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="imagenes/belen.jpg" alt="Belén Espinoza" class="rounded-circle mx-auto mt-4 team-img" width="200" height="200">
                        <div class="card-body">
                            <h4 class="card-title">Belén Espinoza</h4>
                            <p class="card-text">Fundadora y Fotógrafa</p>
                            <p class="text-muted">Con un ojo artístico excepcional, captura la esencia de cada momento en eventos sociales.</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="https://www.instagram.com" class="btn btn-outline-danger mx-2"><i class="bi bi-instagram"></i> Instagram</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center justify-content-center">
                <!-- Fila 2: Miembro 3 y 4 -->
                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="imagenes/mario.jpg" alt="Mario Robles" class="rounded-circle mx-auto mt-4 team-img" width="200" height="200">
                        <div class="card-body">
                            <h4 class="card-title">Mario Robles</h4>
                            <p class="card-text">Editor</p>
                            <p class="text-muted">Encargado de la postproducción audiovisual para crear videos que resuenan con la audiencia.</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="https://www.instagram.com" class="btn btn-outline-danger mx-2"><i class="bi bi-instagram"></i> Instagram</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 mb-5">
                    <div class="card border-0 shadow-lg h-100">
                        <img src="imagenes/cielo.jpg" alt="Cielo Espinoza" class="rounded-circle mx-auto mt-4 team-img" width="200" height="200">
                        <div class="card-body">
                            <h4 class="card-title">Cielo Espinoza</h4>
                            <p class="card-text">Soporte y Manager</p>
                            <p class="text-muted">Su trabajo de soporte es clave para el éxito de nuestros proyectos audiovisuales.</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <a href="https://www.instagram.com" class="btn btn-outline-danger mx-2"><i class="bi bi-instagram"></i> Instagram</a>
                        </div>
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
                        <li><a href="index.html" class="text-light">Inicio</a></li>
                        <li><a href="nosotros.html" class="text-light">Nosotros</a></li>
                        <li><a href="paquetes.html" class="text-light">Paquetes</a></li>
                        <li><a href="equipo.html" class="text-light">Equipo</a></li>
                        <li><a href="contacto.html" class="text-light">Contacto</a></li>
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

    <!-- Bootstrap
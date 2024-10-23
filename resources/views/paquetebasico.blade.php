<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Paquete Básico</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/estilospaquetes.css') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg">
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

    <!-- Hero Section -->
    <section class="hero text-center">
    <div class="container">
        <h1 class="display-4 text-black">Paquete Básico de Fotografía</h1>
        <p class="lead">Captura los momentos más íntimos y especiales de tu boda con nuestro paquete básico.</p>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('imagenes/basico1.png') }}" alt="Fotografía de boda" class="img-fluid img-small" style="border-radius: 10px;">
            </div>
            <div class="col-md-6">
                <img src="{{ asset('imagenes/basico2.jpg') }}" alt="Fotografía de boda" class="img-fluid img-small" style="border-radius: 10px;">
            </div>
        </div>
    </div>
    </section>

    <!-- Sección del Paquete Básico -->
    <section class="paquete-basico text-center py-5">
        <div class="container">
            <h2>¿Qué incluye el Paquete Básico?</h2>
            <p>Perfecto para parejas que desean una celebración íntima con sus seres queridos más cercanos.</p>

            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="imagenes/paquetebasico/pb1.jpg" alt="Servicio de Fotografía" class="img-fluid mb-3" style="border-radius: 10px;">
                    <h3>Servicio de Fotografía</h3>
                    <p>Cubrimos la boda religiosa, sesión de fotos y la recepción. Entregamos entre 180 y 220 fotografías digitales, editadas profesionalmente, en un plazo de 5 días.</p>
                </div>
                <div class="col-md-6">
                    <img src="imagenes/paquetebasico/pb2.jpg" alt="Servicio de Filmación" class="img-fluid mb-3" style="border-radius: 10px;">
                    <h3>Servicio de Filmación</h3>
                    <p>Filmamos la ceremonia religiosa, la sesión de fotos y la recepción. El material incluye un DVD personalizado y un video de hasta 2 horas en calidad 4K.</p>
                    <p>Además, ofrecemos un video resumen para compartir en redes sociales.</p>
                </div>
            </div>

            <div class="mt-5">
                <h3>Equipo de Trabajo</h3>
                <ul>
                    <li>📸 1 Fotógrafo</li>
                    <li>🎥 1 Videógrafo</li>
                    <li>🛠️ 1 Asistente</li>
                </ul>
            </div>
            <div class="inversion-total">
                <h3>Inversión Total</h3>
                <table class="table">
                    <tr>
                        <td>Servicio de Fotografía</td>
                        <td>S/. 550</td>
                    </tr>
                    <tr>
                        <td>Servicio de Filmación 4K</td>
                        <td>S/. 600</td>
                    </tr>
                    <tr>
                        <td>Descuento por comprar ambos paquetes</td>
                        <td>-S/. 30</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Total</td>
                        <td class="fw-bold">S/. 1120</td>
                    </tr>
                </table>
                <p class="nota">Nota: El precio no incluye movilidad.</p>
            </div>            
        </div>
    </section>

    <!-- Testimonios -->
    <section class="testimonios py-5">
        <div class="container">
            <h2 class="text-center mb-4">Lo que dicen nuestros clientes</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial bg-light p-4 rounded">
                        <p>"Gracias a Belén Fotografías, nuestros recuerdos de boda son perfectos. ¡El servicio fue increíble!"</p>
                        <p class="fw-bold">- Ana y Carlos</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial bg-light p-4 rounded">
                        <p>"Capturaron cada detalle importante. ¡Estamos muy felices con el resultado!"</p>
                        <p class="fw-bold">- Mariana y José</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial bg-light p-4 rounded">
                        <p>"El video de resumen que hicieron fue maravilloso, perfecto para compartir en redes sociales."</p>
                        <p class="fw-bold">- Laura y Daniel</p>
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
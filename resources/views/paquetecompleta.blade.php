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
    <link rel="icon" href="{{ asset('imagenes/logo belen.png') }}" type="image/png">
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
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/paquetes') }}">Paquetes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/equipo') }}">Equipo</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('portafolio') }}">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://linktr.ee/belen_fotografias" target="_blank">Redes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="display-4">Paquete Completo de Fotografía</h1>
            <p class="lead">Ningún detalle pasará por alto, tu boda será grabada detalle a detalle. Te aseguramos tener un recuerdo fidedigno de este día.</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="{{ asset('imagenes/paquetecompleto/pc1.jpg') }}" alt="Fotografía de boda completa" class="img-fluid img-small" style="border-radius: 10px;">
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('imagenes/paquetecompleto/pc2.jpg') }}" alt="Fotografía de boda completa" class="img-fluid img-small" style="border-radius: 10px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección del Paquete Completo -->
    <section class="paquete-basico text-center py-5">
        <div class="container">
            <h2>¿Qué incluye el Paquete Completo?</h2>
            <p>Perfecto para parejas que quieren capturar cada detalle de su boda y crear un recuerdo inolvidable.</p>

            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="{{ asset('imagenes/paquetecompleto/pc1.jpg') }}"alt="Servicio de Fotografía" class="img-fluid mb-3" style="border-radius: 10px;">
                    <h3>Servicio de Fotografía</h3>
                    <p>Cubrimos todo: boda civil, sesión de recién casados, fotografía previa a la boda religiosa (casa de los novios), boda religiosa, sesión de fotos (paseo) y recepción. Entregamos entre 450 y 500 fotografías digitales, editadas y colorizadas profesionalmente, en un plazo de 10 días.</p>
                </div>
                <div class="col-md-6">
                    <img src="imagenes/filmacion_servicio.jpg" alt="Servicio de Filmación" class="img-fluid mb-3" style="border-radius: 10px;">
                    <h3>Servicio de Filmación</h3>
                    <p>Filmación con 2 videógrafos, incluyendo el uso de GIMBAL y un dron para tomas aéreas en calidad 4K. El audio se captura desde la consola para mayor calidad. Se entregará un DVD con el evento completo, otro musicalizado con 100 fotos, y un video resumen para redes sociales. El material se enviará en 15 días.</p>
                </div>
            </div>

            <div class="mt-5">
                <h3>Equipo de Trabajo</h3>
                <ul>
                    <li>📸 2 Fotógrafos</li>
                    <li>🎥 2 Videógrafos (con GIMBAL y dron)</li>
                    <li>💡 1 Asistente para iluminación</li>
                </ul>
            </div>
            <div class="inversion-total">
                <h3>Presupuesto de Inversión Total</h3>
                <table class="table">
                    <tr>
                        <td>Servicio Completo</td>
                        <td>S/. 3500</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Total</td>
                        <td class="fw-bold">S/. 3500</td>
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
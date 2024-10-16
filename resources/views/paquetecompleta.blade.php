<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Paquete Completo</title>
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

    <!-- Sección del Paquete Completo -->
    <section class="paquete-completo bg-danger text-light py-5">
        <div class="container">
            <h2 class="text-center">Paquete Completo</h2>
            <p class="text-center">Ningún detalle pasará por alto, tu boda será grabada detalle a detalle. Te aseguramos tener un recuerdo fidedigno de este día.</p>
            <p class="text-center"> (Boda Civil + Sesión de fotos + Cuadro de firmas + Pre -Boda + Boda religiosa + sesión de fotos (paseo) + recepción)</p>

            <div class="row mt-4">
                <div class="col-md-6">
                    <h3>Servicio de Fotografía</h3>
                    <p>Con 2 fotógrafos, cubre todo: boda civil, sesión de recién casados, fotografía previos a la boda religiosa (casa de los novios), boda religiosa, sesión de fotos (paseo) y recepción. Se enviará entre 450 a 500 fotografías digitales por correo electrónico, cada una editada y colorizada profesionalmente. El material se enviará 10 días después del evento.</p>
                </div>
                <div class="col-md-6">
                    <h3>Servicio de Filmación</h3>
                    <p>Con 2 videógrafos (GIMBAL) + 1 DRON, cubre todo: boda civil, sesión de recién casados, fotografía previos a la boda religiosa (casa de los novios), boda religiosa, sesión de fotos (paseo) y recepción. El audio es captado desde la consola para una mejor calidad. Segundo videógrafo utilizando GIMBAL DJL para tomas más creativas. La calidad de grabación es 4K. Uso de DRON para tomas aéreas. Se entregará 1 DVD con la carátula personalizada. La duración del video es de aproximadamente 2 horas.</p>
                    <p>Se entregará un DVD musicalizado con 100 fotografías de la boda y recepción. Además, se creará un video resumen con las escenas más significativas del evento y de la sesión de fotos, que puede ser compartido en redes sociales como Instagram, TikTok o Facebook. El material se enviará 15 días después del evento.</p>
                </div>
            </div>

            <div class="mt-4">
                <h3>Resumen de Entrega del Material Físico</h3>
                <ul>
                    <li>PhotoBook de 100 fotografías + Caja de Pino con nombre grabado.</li>
                    <li>USB de madera con todas las fotografías de la boda.</li>
                    <li>Cuadro de firmas (30x45 cm) con parante de madera para el día del evento.</li>
                    <li>2 DVD con carátula personalizada de la filmación del evento (aprox. 2 h).</li>
                    <li>1 DVD musicalizado con 100 fotografías de la boda y recepción.</li>
                </ul>
            </div>

            <div class="mt-4">
                <h3>Equipo de Trabajo</h3>
                <ul>
                    <li>2 Fotógrafos</li>
                    <li>2 Videógrafos</li>
                    <li>1 Asistente para iluminación</li>
                </ul>
            </div>

            <div class="mt-4">
                <h3>Presupuesto de Inversión Total</h3>
                <p>Servicio completo: S/. 3500</p>
                <p>Total: S/. 3500</p>
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
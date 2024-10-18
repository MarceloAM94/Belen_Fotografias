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

    <!-- Sección de Contacto -->
    <section class="contact-section py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Contacto</h2>
            <p class="text-center">Nos encantaría saber de ti. Completa el siguiente formulario y nos pondremos en contacto contigo a la brevedad.</p>

            <!-- Formulario de contacto -->
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="name" class="form-label">Nombre</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" id="name" placeholder="Tu nombre" required>
                        <div class="invalid-feedback">
                            Por favor ingresa tu nombre.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
                        <div class="invalid-feedback">
                            Por favor ingresa un correo válido.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="phone" class="form-label">Teléfono</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                        <input type="text" class="form-control" id="phone" placeholder="Tu teléfono" required>
                        <div class="invalid-feedback">
                            Por favor ingresa tu número de teléfono.
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="subject" class="form-label">Asunto</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text"><i class="bi bi-chat-dots-fill"></i></span>
                        <input type="text" class="form-control" id="subject" placeholder="Asunto" required>
                        <div class="invalid-feedback">
                            Por favor ingresa el asunto.
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Tu mensaje" required></textarea>
                    <div class="invalid-feedback">
                        Por favor escribe tu mensaje.
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button class="btn btn-primary w-50" type="submit">Enviar</button>
                </div>
            </form>

            <!-- Información de contacto -->
            <div class="contact-info text-center mt-5">
                <h3>Información de Contacto</h3>
                <p>Dirección: Jr Lucanas 683 - La Victoria, Ciudad, País</p>
                <!-- Mapa embebido de Google -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3896.920148760928!2d-76.99242578564347!3d-12.05594589146106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c84b19d9d415%3A0xb89e0a6b4cf80b85!2sJir%C3%B3n%20Lucanas%20683%2C%20La%20Victoria%2015033%2C%20Per%C3%BA!5e0!3m2!1ses!2sco!4v1634397210514!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                    <a href="https://linktr.ee/belen_fotografias" target="_blank" class="text-light mx-2"><i class="bi bi-linkedin" style="font-size: 1.5rem;"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script para validación del formulario -->
    <script>
        (function () {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>

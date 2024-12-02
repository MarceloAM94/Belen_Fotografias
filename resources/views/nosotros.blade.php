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
    <link rel="icon" href="{{ asset('imagenes/logo belen.png') }}" type="image/png">
    <!-- AOS CSS para animaciones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
</head>
<body>
    <!-- Iconos --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Navbar -->
    <header data-aos="fade-down">
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
                        <li class="nav-item"><a class="nav-link" href="{{ url('portafolio') }}">Portafolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://linktr.ee/belen_fotografias" target="_blank">Redes</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Sección "Nosotros" -->
    <section class="nosotros py-5 bg-light" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center mb-4" data-aos="zoom-in">Nosotros</h2>
            <p class="text-center" data-aos="fade-up">Conocemos más a través de nuestra historia y el motivo por el cual seguimos capturando tus recuerdos.</p>
            <hr class="my-4" style="border-color: #b11c22;">

            <!-- Historia de la Empresa -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('imagenes/nosotros1.jpg')}}" class="img-fluid rounded" alt="Historia de la Empresa">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h3>Historia de la Empresa</h3>
                    <p>
                        Desde su fundación en 2019, Belén Fotografías ha estado capturando los momentos más memorables de la vida. Con más de cinco años de experiencia en el campo audiovisual, hemos crecido junto a nuestros clientes, convirtiéndonos en su elección preferida para la fotografía y filmación de eventos sociales. Nuestra pasión por contar historias a través de imágenes nos ha permitido crear un legado visual que perdura en el tiempo.
                    </p>
                </div>
            </div>

            <!-- Misión -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2" data-aos="fade-left">
                    <img src="{{ asset('imagenes/nosotros2.jpg')}}" class="img-fluid rounded" alt="Misión de la Empresa">
                </div>
                <div class="col-md-6 order-md-1" data-aos="fade-right">
                    <h3>Misión</h3>
                    <p>
                        Nuestra misión es ofrecer a nuestros clientes una experiencia única y personalizada en la captura de sus momentos especiales. Nos comprometemos a brindar un servicio de alta calidad, utilizando técnicas innovadoras y un enfoque artístico que refleje la esencia de cada evento.
                    </p>
                </div>
            </div>

            <!-- Visión -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('imagenes/nosotros3.jpg')}}" class="img-fluid rounded" alt="Visión de la Empresa">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h3>Visión</h3>
                    <p>
                        Nuestra visión es ser reconocidos como líderes en el sector audiovisual, destacando por nuestra creatividad y profesionalismo. Aspiramos a expandir nuestro alcance, llevando nuestras historias visuales a más familias y eventos, y adaptándonos continuamente a las nuevas tendencias del mercado.
                    </p>
                </div>
            </div>

            <!-- Compromiso con la Calidad -->
            <div class="row">
                <div class="col-md-12 text-center" data-aos="zoom-in-up">
                    <h3>Compromiso con la Calidad</h3>
                    <p>
                        En Belén Fotografías, la calidad es nuestra máxima prioridad. Nos dedicamos a utilizar equipos de última generación y técnicas de vanguardia para asegurar que cada imagen y cada video sean de la más alta calidad. Nuestro compromiso con la excelencia se refleja en cada proyecto, donde nos esforzamos por superar las expectativas de nuestros clientes y capturar la esencia de sus momentos más preciados.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom py-5 bg-dark text-light" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <!-- Información de contacto -->
                <div class="col-md-4 mb-4" data-aos="fade-right">
                    <h5>Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> Jr Lucanas 683, La Victoria, Lima, Lima</li>
                        <li><i class="bi bi-telephone-fill"></i> +51 999 999 999</li>
                        <li><i class="bi bi-envelope-fill"></i> info@belenfotografias.com</li>
                    </ul>
                </div>

                <!-- Enlaces útiles -->
                <div class="col-md-4 mb-4" data-aos="fade-up">
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
                <div class="col-md-4 mb-4 text-center" data-aos="fade-left">
                    <h5>Síguenos en Redes Sociales</h5>
                    <a href="https://www.facebook.com/belenfotografias" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/belenfotografias" class="text-light me-2"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS para animaciones -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inicializar animaciones AOS
        AOS.init({
            duration: 1200, // Duración de las animaciones
        });
    </script>
</body>
</html>

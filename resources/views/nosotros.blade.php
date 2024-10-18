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

    <!-- Sección "Nosotros" -->
    <section class="nosotros py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Nosotros</h2>
            <p class="text-center">Conocemos más a través de nuestra historia y el motivo por el cual seguimos capturando tus recuerdos.</p>

            <hr class="my-4" style="border-color: #b11c22;">

            <!-- Historia de la Empresa -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="https://scontent.flim12-1.fna.fbcdn.net/v/t39.30808-6/240997581_1225738284591949_1104919892533960549_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=9cNvZbLBqK0Q7kNvgH4oJI_&_nc_ht=scontent.flim12-1.fna&oh=00_AYAhd-_SYfxBpnogb4SOu0CKZIVny3UC8OmVXqiEhEBKnA&oe=6702A4EE" class="img-fluid rounded" alt="Historia de la Empresa">
                </div>
                <div class="col-md-6">
                    <h3>Historia de la Empresa</h3>
                    <p>
                        Desde su fundación en 2019, Belén Fotografías ha estado capturando los momentos más memorables de la vida. Con más de cinco años de experiencia en el campo audiovisual, hemos crecido junto a nuestros clientes, convirtiéndonos en su elección preferida para la fotografía y filmación de eventos sociales. Nuestra pasión por contar historias a través de imágenes nos ha permitido crear un legado visual que perdura en el tiempo.
                    </p>
                </div>
            </div>

            <!-- Misión -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-2">
                    <img src="https://scontent.flim12-1.fna.fbcdn.net/v/t39.30808-6/461153970_831476609072547_1396875776684713514_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Tb__sgr7SKUQ7kNvgEKeqW6&_nc_ht=scontent.flim12-1.fna&_nc_gid=AgzeI-ed6tkRxaIWmIBE4aX&oh=00_AYB1tY7Fa3sj1X0iEoDsdZhR1kHPRZj8Iik3CjhVtpzImg&oe=67028B8E" class="img-fluid rounded" alt="Misión de la Empresa">
                </div>
                <div class="col-md-6 order-md-1">
                    <h3>Misión</h3>
                    <p>
                        Nuestra misión es ofrecer a nuestros clientes una experiencia única y personalizada en la captura de sus momentos especiales. Nos comprometemos a brindar un servicio de alta calidad, utilizando técnicas innovadoras y un enfoque artístico que refleje la esencia de cada evento.
                    </p>
                </div>
            </div>

            <!-- Visión -->
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <img src="https://scontent.flim12-1.fna.fbcdn.net/v/t39.30808-6/421653193_690069363213273_4496029786475799063_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=127cfc&_nc_ohc=gF6oYBFaNcwQ7kNvgH5t_5d&_nc_ht=scontent.flim12-1.fna&_nc_gid=AoFDfGYU9Wq6QjZ_7BYHQdv&oh=00_AYC-M0L1H0rZ8ZSGO5XHMGc4QLPre9PfUo91Q4s5VbaK6Q&oe=6702B7C1" class="img-fluid rounded" alt="Visión de la Empresa">
                </div>
                <div class="col-md-6">
                    <h3>Visión</h3>
                    <p>
                        Nuestra visión es ser reconocidos como líderes en el sector audiovisual, destacando por nuestra creatividad y profesionalismo. Aspiramos a expandir nuestro alcance, llevando nuestras historias visuales a más familias y eventos, y adaptándonos continuamente a las nuevas tendencias del mercado.
                    </p>
                </div>
            </div>

            <!-- Compromiso con la Calidad -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Compromiso con la Calidad</h3>
                    <p>
                        En Belén Fotografías, la calidad es nuestra máxima prioridad. Nos dedicamos a utilizar equipos de última generación y técnicas de vanguardia para asegurar que cada imagen y cada video sean de la más alta calidad. Nuestro compromiso con la excelencia se refleja en cada proyecto, donde nos esforzamos por superar las expectativas de nuestros clientes y capturar la esencia de sus momentos más preciados.
                    </p>
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
                        <li><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                        <li><a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a></li>
                        <li><a class="nav-link" href="{{ url('/paquetes') }}">Paquetes</a></li>
                        <li><a class="nav-link" href="{{ url('/equipo') }}">Equipo</a></li>
                        <li><a class="nav-link" href="{{ url('/contacto') }}">Contacto</a></li>
                    </ul>
                </div>

                <!-- Redes sociales -->
                <div class="col-md-4 mb-4 text-center">
                    <h5>Síguenos en Redes Sociales</h5>
                    <a href="https://www.facebook.com/belenfotografias" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/belenfotografias" class="text-light me-2"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

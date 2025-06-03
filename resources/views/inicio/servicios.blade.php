<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Servicios</title>
    <!-- Carga los estilos con Vite -->
    @vite(['resources/sass/app.scss', 'resources/css/servicios.css', 'resources/css/menu.css'])
    <!-- Links para la animación de las secciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>
<body>
    <!-- Navbar personalizado (igual al tuyo) -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link seleccionado" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ route('contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ route('login') }}">Iniciar Sesión/Registro</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="contenedorM" style="background-image: url('{{ asset('img/fondo-descubramas.jpeg') }}')";>
        <div class="color-fondo py-5">
            <div class="container text-center">

                <!-- Contenedor principal de servicios -->
                <h1 class="mb-4">NUESTROS SERVICIOS</h1>
                <div class="info-box1 mx-auto p-3" data-aos="fade-up">
                    Nuestra cooperativa formada por docentes de inglés que trabajan en escuelas y universidades de país presenta Lingualeap.<br><br> 
                    LinguaLeap es una plataforma diseñada para el aprendizaje rápido del inglés, ofreciendo lecciones en video de corta duración (de hasta 10 minutos) impartidas por nuestros docentes, quienes también son socios de la cooperativa.<br><br> 
                    Las lecciones abarcan niveles desde básico hasta avanzado y se complementan con minijuegos, actividades y un quiz al final de cada lección para evaluar tus conocimientos. Es accesible para todos los usuarios.
                </div>

                <h1 class="mt-5 mb-4">TE OFRECEMOS</h1>
                <div class="info-box2 mx-auto p-3" data-aos="fade-up">
                    <p>1- Curso completo de inglés gratuito, con una opción premium que desbloquea minijuegos, lecciones exclusivas, avatares y temas de personalización, además de eliminar anuncios.</p>
                    <p>2- Ambiente amigable y libre de publicidad invasiva.</p>
                    <p>3- Interactividad y experiencias innovadoras como:</p>
                    <p>4- Foro y chats para iniciar conversaciones en inglés, tanto por texto como por voz.</p>
                    <p>5- Minijuegos multijugador para practicar inglés con amigos o con usuarios de la plataforma.</p>
                </div>

                <div class="divider my-4"></div>
                
                <!-- Imagen centrada -->
                <div class="image-container text-center my-4">
                    <div data-aos="fade-up">
                        <img src="../img/3.png" class="background-image img-fluid" alt="Imagen de fondo">
                    </div>
                </div>

                <div class="divider my-4"></div>

                <!-- Video centrado -->
                <h1 class="h1video">¿POR QUÉ TE CONVIENE UTILIZAR NUESTRA PLATAFORMA?</h1>
                <div class="d-flex justify-content-center my-4">
                    <video class="custom-video" poster="../img/miniatura.png" controls data-aos="fade-up">
                        <source src="{{ asset('video/Vídeo sin título ‐ Hecho con Clipchamp (1).mp4') }}" type="video/mp4">
                    </video>
                </div>

                <!-- Botón de registro -->
                <button class="custom-button mx-auto d-block"><a href="{{ route('login') }}">REGÍSTRATE AHORA</a></button>
            </div>
        </div>
    </div>

    <script>
        AOS.init({
            duration: 1000, // Duración de la animación en milisegundos
            offset: 100,    // Distancia desde la parte inferior del viewport para iniciar la animación
        });
    </script>

    <!-- Carga los scripts con Vite (incluye Bootstrap, Popper y jQuery) -->
    @vite(['resources/js/app.js'])
</body>
</html>

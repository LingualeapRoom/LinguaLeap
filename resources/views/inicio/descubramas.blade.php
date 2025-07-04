<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <!-- Carga los estilos con Vite -->
    @vite(['resources/sass/app.scss', 'resources/css/descubramas.css', 'resources/css/menu.css'])
    <!--Links para la animación de las secciones-->
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
        <div class="bg-white d-flex justify-content-center align-items-center">
            <h1 class="Titulo1 mb-0">Bienvenido a</h1>
            <img src="../img/logo.png" alt="Logo" class="logo2 img-fluid mx-3">
        </div>              

        <!--LOS INFO-CONTAINERS-->
        <div class="info-container">
            <div class="info-box1" data-aos="fade-up">
                <p>El nombre de nuestra cooperativa y de nuestra página web, “LinguaLeap”, combina dos palabras Lingua del latín, que significa lengua y Leap del inglés, que significa salto, lo tiene que ver con nuestro compromiso de hacer que nuestros usuarios salten del español al inglés.</p>
                <p>Nuestro slogan es “Aprender cada vez más” que es una declaración corta pera clara de nuestro objetivo con esta plataforma online y al mismo tiempo lo que significa ser un bilingüe: otra oportunidad de seguir aprendiendo y ampliando tus conocimientos.</p>
            </div>
            <div class="info-box3" data-aos="fade-right">
                <div class="row" style="width: 100%;"> <!-- Esta es la fila principal -->
                    <div class="col-lg-4 col-md-6 col-12"> <!-- Columna para pantallas grandes y más pequeñas -->
                        <div class="vision">
                            <h1>VISIÓN</h1>
                            <p>Ser la cooperativa salvadoreña que brinde el servicio virtual de enseñanza del idioma inglés más completo de El Salvador, que capacite y prepare a las personas para el mundo en el que vivimos.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12"> <!-- Columna para pantallas grandes y más pequeñas -->
                        <div class="mision">
                            <h1>MISIÓN</h1>
                            <p>Brindar la oportunidad de dominar el idioma inglés a las personas, para así abrirles un mundo de oportunidades laborales y de crecimiento personal y llevarlos más allá de las fronteras de nuestra nación.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12"> <!-- Columna para pantallas grandes y más pequeñas -->
                        <div class="valores">
                            <h1>VALORES</h1>
                            <p>Nuestra cooperativa se rige por el respeto, la colaboración, el compromiso, la transparencia, y la confidencialidad.</p>
                        </div>
                    </div>
                </div>
            </div>            
        </div>  

        <div class="info-box2" data-aos="fade-left">
            <h1 style="text-align: center; margin: 0;">NUESTRO EQUIPO</h1>
            <p>Conoce a los profesionales dedicados que hacen posible LinguaLeap. Nuestro equipo está compuesto por expertos en enseñanza del inglés, tecnología educativa, y soporte al cliente, todos comprometidos con tu éxito.</p>
            <div class="team">
                <div class="team-member">
                    <div class="circle">
                        <img src="../img/andres.jpg" alt="andres" class="team-photo">
                    </div>
                    <p>Presidente <hr>
                    Andrés Isaac Navas Paredes</p>
                    
                </div>
                <div class="team-member">
                    <div class="circle">
                        <img src="../img/christian.jpeg" alt="christian" class="team-photo">
                    </div>
                    <p>Vicepresidente<hr>
                    Christian Alexander Vásquez Santos</p>
                </div>
                <div class="team-member">
                    <div class="circle">
                        <img src="../img/eunice.jpg" alt="eunice" class="team-photo">
                    </div>
                    <p>Tesorera<hr>
                    Eva Eunice Amaya Martínez</p>
                </div>
                <div class="team-member">
                    <div class="circle">
                        <img src="../img/leonel.jpg" alt="leonel" class="team-photo">
                    </div>
                    <p>Secretario<hr>
                    Leonel Evelio Ramírez Osegueda</p>
                </div>
                <div class="team-member">
                    <div class="circle">
                        <img src="../img/paola.jfif" alt="paola" class="team-photo">
                    </div> 
                    <p>Vocal<hr>
                    Paola Michelle Ramírez Barahona</p>
                </div>
            </div>
        </div>

        <div class="info-box2 ubicacion" data-aos="fade-up">
            <h1 style="text-align: center; margin: 0;">NUESTRA UBICACIÓN</h1>
            <p>Km 11 1/2 carretera a Santa Tecla, SANTA TECLA, Libertad · 03 km</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.7329523110193!2d-89.2814062253214!3d13.673995586709783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f632e511f372dd3%3A0x3fe0c1447718b059!2sITCA%20-%20FEPADE!5e0!3m2!1ses-419!2ssv!4v1729562594700!5m2!1ses-419!2ssv" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="info-box5" data-aos="fade-up">
            <div class="trabaja">
                <h1 style="text-align: center; margin: 0;">TRABAJA CON NOSOTROS</h1>
            </div>
            <div class="requisitos-container">
                <div class="row"> <!-- Fila principal -->
                    <div class="col-lg-6 col-12"> <!-- Columna para pantallas grandes y más pequeñas -->
                        <div class="requisitos" style="width: 100%;">
                            <h2>REQUISITOS</h2>
                            <ul>
                                <li>Compromiso con la educación.</li>
                                <li>Habilidades lingüísticas (nivel mínimo de inglés).</li>
                                <li>Formación académica (en enseñanza de idiomas o campo relacionado).</li>
                                <li>Experiencia docente.</li>
                                <li>Colaboración (disposición para trabajar en equipo).</li>
                                <li>Participación activa (en reuniones y actividades).</li>
                                <li>Cumplimiento de normativas (aceptar y cumplir con las políticas de la cooperativa).</li>
                                <li>Contribución económica (aporte inicial o cuota regular).</li>
                                <li>Carta de motivación (detallando habilidades y experiencias).</li>
                                <li>Entrevista (posible proceso de selección).</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12"> <!-- Columna para pantallas grandes y más pequeñas -->
                        <div class="beneficios" style="width: 100%">
                            <h2>BENEFICIOS</h2>
                            <ul>
                                <li>Impacto Social Positivo: Contribuye al crecimiento educativo y profesional de nuestros estudiantes, abriendo oportunidades para su futuro.</li>
                                <li>Desarrollo Profesional: Mejora tus habilidades en pedagogía digital, liderazgo y gestión de proyectos educativos en plataformas virtuales.</li>
                                <li>Flexibilidad Laboral: Trabaja desde cualquier lugar con horarios flexibles y la libertad de utilizar tus propios métodos de enseñanza adaptados al entorno en línea.</li>
                                <li>Innovación en la Enseñanza Virtual: Aplica métodos creativos e innovadores en un entorno digital, aprovechando la tecnología para mejorar la experiencia de aprendizaje.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            

            <div class="info-box4" data-aos="fade-up">
                <h1 style="text-align: center; margin: 0;">PARA ASOCIARTE</h1>
                <p style="text-align: center;">Si estás interesado en unirte a nuestro equipo, haz clic en el botón a continuación para llenar el formulario de solicitud.</p>
                <div style="text-align: center;">
                    <button class="boton" onclick="window.location.href='{{ route('formulario') }}'">Llenar Formulario</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        AOS.init();
    </script>

    <!-- Carga los scripts con Vite (incluye Bootstrap, Popper y jQuery) -->
    @vite(['resources/js/app.js'])
</body>
</html>

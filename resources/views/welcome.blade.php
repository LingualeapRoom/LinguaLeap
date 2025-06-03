<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingualeap | Inicio</title>
    
    <!-- Carga los estilos con Vite -->
    @vite(['resources/sass/app.scss', 'resources/css/inicio.css', 'resources/css/menu.css'])
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
                    <a class="nav-link custom-link seleccionado" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ route('servicios') }}">Servicios</a>
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

    <!-- Contenido principal -->
    <div class="contenedorM" style="background-image: url('{{ asset('img/1.png') }}')">
        <div class="row align-items-center" style="margin: 0;">
            <div class="col-lg-6 col-12 text-center mb-3">
                <div class="texto-encima">
                    <h1 class="titulo-principal">LINGUALEAP</h1>
                    <h2 class="subtitulo">APRENDER, CADA VEZ MÁS</h2>
                    <p class="descripcion">Con el inglés abres una puerta a un mundo <br> de oportunidades. ¡Empieza ya!</p>
                    <a href="{{ route('about') }}"><button class="custom-button">SOBRE NOSOTROS</button></a>
                </div>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img class="Poliglot img-fluid" src="{{ asset('img/Poliglot.png') }}" alt="Poliglot">
            </div>
        </div>
    </div>

    <!-- Carga los scripts con Vite (incluye Bootstrap, Popper y jQuery) -->
    @vite(['resources/js/app.js'])
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <!-- Carga los estilos con Vite -->
    @vite(['resources/sass/app.scss', 'resources/css/contacto.css', 'resources/css/menu.css'])
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
                    <a class="nav-link custom-link" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link seleccionado" href="{{ route('contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ route('login') }}">Iniciar Sesión/Registro</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Sección de Contacto -->
<div class="contenedorM" style="background-image: url('{{ asset('img/5.png') }}')";>
    <div class="color-fondo">
        <!-- Título y subtítulo -->
        <div class="contact-info text-center mb-4">
            <h2>Contacto</h2>
            <p class="subtitulo">Si necesitas más información del curso o tienes alguna duda,<br> escríbenos, te responderemos lo antes posible.</p>
        </div>

        <!-- Sección de contacto con el formulario a la derecha en pantallas grandes -->
        <div class="row contact-section">
            <!-- Información de contacto -->
            <div class="contact-info-left col-lg-3 col-md-3 col-12">
                <p>Utiliza las siguientes vías de contacto:</p>
                <p><strong>Vía E-mail:</strong> andresconete@gmail.com</p>
                <p><strong>Por teléfono:</strong> 91-1234-567</p>
                <p>O rellena el siguiente formulario:</p>
            </div>

            <!-- Formulario -->
            <div class="formulario-container col-lg-7 col-md-7 col-12">
                <form id="form">
                    <input type="text" placeholder="Escribe tu nombre" name="nombre" class="form-control mb-3">
                    <input type="email" placeholder="Escribe tu email" name="email" class="form-control mb-3">
                    <input type="phone" placeholder="Escribe tu número de teléfono (opcional)" name="telefono" class="form-control mb-3">
                    <textarea placeholder="Escribe tu mensaje aquí" name="mensaje" class="form-control mb-3"></textarea>

                    <input type="submit" class="custom-button btn btn-primary btn-block" id="button" value="ENVIAR MENSAJE">
                </form>
            </div>
        </div>
    </div>
</div>



    <!-- Scripts EmailJS y Bootstrap -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        emailjs.init('PRIu9z3-8lJj7Xm-a');
    </script>

    <script>
        const btn = document.getElementById('button');

        document.getElementById('form').addEventListener('submit', function(event) {
            event.preventDefault();
            btn.value = 'Enviando...';

            const serviceID = 'default_service';
            const templateID = 'template_7a73t19';

            emailjs.sendForm(serviceID, templateID, this)
                .then(() => {
                    btn.value = 'ENVIAR MENSAJE';
                    alert('¡Mensaje Enviado!');
                }, (err) => {
                    btn.value = 'ENVIAR MENSAJE';
                    alert(JSON.stringify(err));
                });
        });
    </script>

    <!-- Carga los scripts con Vite (incluye Bootstrap, Popper y jQuery) -->
    @vite(['resources/js/app.js'])
</body>
</html>

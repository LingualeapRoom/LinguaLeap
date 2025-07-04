<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Asociación</title>
    <!-- Carga los estilos con Vite -->
    @vite(['resources/sass/app.scss', 'resources/css/formulario.css', 'resources/css/menu.css'])

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("UJPBL0FWKR49bmJdT"); 
        })(); 
    </script>
</head>
<body class="contenedorM" style="background-image: url('{{ asset('img/fondo-descubramas.jpeg') }}');";>
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
                    <a class="nav-link custom-link" href="{{ route('contacto') }}">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-link" href="{{ route('login') }}">Iniciar Sesión/Registro</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="header-section text-center">
            <h1>Formulario de Asociación</h1>
            <p>Si estás interesado en unirte a nuestro equipo, llena el formulario a continuación.</p>
        </div>
        <form id="contact-form" class="mx-auto" style="max-width: 600px;">
            
            <h3>Información Personal</h3>
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <!-- Educación y Experiencia -->
            <h3>Educación y Experiencia</h3>
            <div class="form-group">
                <label for="nivel_educativo">Nivel educativo:</label>
                <input type="text" class="form-control" id="nivel_educativo" name="nivel_educativo" required>
            </div>
            <div class="form-group">
                <label for="titulos">Títulos o certificaciones en enseñanza de idiomas:</label>
                <input type="text" class="form-control" id="titulos" name="titulos">
            </div>
            <div class="form-group">
                <label for="experiencia">Experiencia laboral previa:</label>
                <textarea class="form-control" id="experiencia" name="experiencia" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="idiomas">Idiomas hablados:</label>
                <input type="text" class="form-control" id="idiomas" name="idiomas" required>
            </div>
            <!-- Disponibilidad -->
            <h3>Disponibilidad</h3>
            <div class="form-group">
                <label for="disponibilidad">Días y horas disponibles:</label>
                <input type="text" class="form-control" id="disponibilidad" name="disponibilidad" required>
            </div>
            <!-- Motivación y Expectativas -->
            <h3>Motivación y Expectativas</h3>
            <div class="form-group">
                <label for="motivo">Motivo para unirse a la cooperativa:</label>
                <textarea class="form-control" id="motivo" name="motivo" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="expectativas">Expectativas de participación:</label>
                <textarea class="form-control" id="expectativas" name="expectativas" rows="4" required></textarea>
            </div>
            <!-- Otros -->
            <h3>Otros</h3>
            <div class="form-group">
                <label for="referencias">Referencias Personales y Laborales:</label>
                <textarea class="form-control" id="referencias" name="referencias" rows="4"></textarea>
            </div>
            <div class="form-group">
                <h3><label for="documentacion">Documentación adicional:</label></h3>
                <p>Puedes adjuntar tu título o certificaciones aquí</p>
                <input type="file" class="form-control-file" id="documentacion" name="documentacion">
            </div>
            <!-- Consentimiento -->
            <h3>Consentimiento</h3>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terminos" name="terminos" required>
                <label class="form-check-label" for="terminos">Acepto los términos y condiciones</label>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="consentimiento" name="consentimiento" required>
                <label class="form-check-label" for="consentimiento">Doy mi consentimiento para el uso de mis datos personales</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
        </form>
        <div class="text-center mt-3">
            <button class="btn btn-secondary" onclick="window.location.href='{{ route('about') }}'">Regresar</button>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            emailjs.sendForm('service_g5kre7t', 'template_pjsejn1', this)
                .then(function() {
                    alert('Mensaje enviado con éxito! Uno de nuestros administradores se pondrá en contacto contigo.');
                    window.location.href = '{{ route('about') }}';
                }, function(error) {
                    alert('Error al enviar el mensaje: ' + JSON.stringify(error));
                });
        });
    </script>

    <!-- Carga los scripts con Vite (incluye Bootstrap, Popper y jQuery) -->
    @vite(['resources/js/app.js'])
</body>
</html>
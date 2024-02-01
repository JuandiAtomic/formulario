<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourGuide</title>
    <link rel="stylesheet" href="styles/stylesform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
    <form method="post">
        <div class="container">
            <a href="exploreTourGuide.html" class="search-button">
                <img src="imagenes/Captura.JPG" alt="Textura Ciudad">
                <span class="icon">
                    <i class="fas fa-search"></i>
                </span>
                <img src="imagenes/TourGuide Logo.png" class="title" alt="TourGuideFont">
            </a>
                
            <div class="login-section">
                <h1 class="login-title">Crear Cuenta</h1>
                <p class="login-subtitle">Crea una cuenta de TourGuide</p>
                <br>

                <label for="name">Nombre</label>
                <input type="text" name="name" id="nombre" placeholder="exampleAlex">

                <label for="lastname">Apellido</label>
                <input type="text" name="lastname" id="lastname" placeholder="exampleSmith">

                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="example@mail.com">

                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Introduce tu contraseña">

                <br>

                <button class="login-button" type="submit" name="register">
                    <img src="imagenes/textura-viajes.JPG" alt="Textura Viajes">
                    <span class="Entrar-title">Entrar</span>
                </button>

                <p class="no-account">¿Ya tienes cuenta? <span class="log-in"><a href="crear_cuenta.html">Inicia Sesión</a></span></p>

                <br>
            
                <!-- Línea en el centro -->
                <hr class="center-line">
                
                <!-- Sección "Continuar con Google" -->
                <div class="google-section">
                    <a href="google.html" class="google">
                        <button class="google-button">
                            <img src="imagenes/google-logo-6278331_1280.webp" alt="Logo de Google" class="google-logo">
                            <span class="text-google">Continuar con Google</span>
                        </button>
                    </a>
                </div>

                <!-- Texto con enlaces -->
                <p class="terms-text">
                    Al crear una cuenta, aceptas nuestras 
                    <a href="enlace_politicas_privacidad.html" target="_blank">Políticas de privacidad</a> 
                    y 
                    <a href="enlace_terminos_uso.html" target="_blank">Términos de uso</a>.
                </p>
            </div>
        </div>
    </form>

    <?php 
    include("registrar.php");
    ?>
</body>
</html>






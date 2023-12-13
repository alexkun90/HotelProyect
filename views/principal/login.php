


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="assets/principal/css/loginstyle.css">
</head>
<body>
    <main>

        <div class="contenedor__todo">
        
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta</h3>
                    <p>Registrase para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Formulario de login y Registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="./login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name= "contrasena">
                    <button>Iniciar</button>
                </form>
                <!--Registro-->
                <form id="formulario" autocomplete="off" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="clave">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/login.js'; ?>"></script>
    <script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/register.js'; ?>"></script>
    <script src="assets/principal/css/scriptLogin.js"></script>
</body>
</html>
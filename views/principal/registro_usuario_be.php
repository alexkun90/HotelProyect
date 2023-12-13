<?php 

    include 'conexion_be.php' ;

    $nombre_completo= $_POST['nombre_completo'];
    $correo= $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    //Encriptar la contrasena
    $contrasena = hash('sha512',$contrasena);

    $query = "INSERT INTO usuarios(NOMBRE_COMPLETO, CORREO, USUARIO, CONTRASENA) 
                VALUES ('$nombre_completo','$correo', '$usuario', '$contrasena')";


    //Verificar que el correo no se repita en la base de datos

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE CORREO = '$correo'");

    if (mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "./login.php";
            </script>
        ';
        exit();
    }

    //Verificar que el nombre de usuario no se repita en la base de datos

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE USUARIO = '$usuario'");

    if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "./login.php";
            </script>
        ';
        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo'
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "./login.php";
    </script>
    ';
}else {
    echo'
    <script>
        alert("Intentalo de nuevo usuario no almacenado");
        window.location = "./login.php";
    </script>
    ';
}

mysqli_close($conexion);

















?>
<?php

    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    //Saber cuantas variables estan encriptadas, error de inicio
    //echo $contrasena:
    //die();
    //Ejecutar en caso de no poder inicar sesion y saber la longitud de la contraseña

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' 
    and contrasena = '$contrasena'");

    if(mysqli_num_rows($validar_login) > 0) {
        $_SESSION['usuario'] = $correo;
        header("location: ../home.php");
        //header("location: ../.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existe, verifica los datos ingresados");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }

?>

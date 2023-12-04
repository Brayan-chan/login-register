<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Home</title>
        <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>

    <h1 class="letras">Bienvenido a esta nueva página web</h1><br>
    <a href="php/cerrar_sesion.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
</body>
</html>
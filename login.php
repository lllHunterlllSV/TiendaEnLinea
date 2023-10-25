<?php

session_start();

//include('./header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <title>Página de Inicio de Sesión</title>
</head>
<body>
    <div class="login-container">
        <div class="background-blur"></div> <!-- Fondo con desenfoque -->
        <h2>Iniciar Sesión</h2>
        <h3><?php echo isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : '' ;?></h3>
        <form action="verificar.php" method="post" class="form-control">

            <input type="text" placeholder="usuario" name="usuario" class="form-control-field error">

            <input type="password" placeholder="Password" name="password" class="form-control-field">
            <a class="enlaceRegistro" href="registro.php">registrarse</a>
            <button class="btn btn-default btn-primary">Iniciar seción</button>
        </form>
    </div>
</body>
</html>


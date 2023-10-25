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
        <h2>Registrarse</h2>
        <h3><?php echo isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : '' ;?></h3>
                <form action="guardar.php" method="post" class="form-control">

                    <input type="text" placeholder="usuario" name="usuario" class="form-control-field error">

                    <input type="password" placeholder="Password" name="password" class="form-control-field">

                    <button class="btn btn-default btn-primary">Registrase</button>
                </form>
    </div>
</body>
</html>


<?php
session_start();

$servername = "localhost";
$database = "tiendaenlinea";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);


if(isset($_POST['usuario'])){
    $usuario=$_POST['usuario'];
    $password=$_POST['password'];
    
    $login = "INSERT INTO usuario (usuario, usuario.password, activo, rol) values( '$usuario', '$password', 1, 1)";
    
    
    $resultado=mysqli_query($conn, $login);
    
    header('Location: ./login.php');
    

    //echo mysqli_query($conn, $login);
    // header('Location: ./login.php');
    // $_SESSION['mensaje']="Error al inicio de session";
    //echo "ocurrio un error al iniciar sesion";


    

}

?>
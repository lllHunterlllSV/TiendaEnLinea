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
    
    $login = "SELECT usuario, usuario.password FROM usuario where usuario = '$usuario' and usuario.password = '$password'";
    

    $resultado=mysqli_query($conn, $login);
    if(mysqli_num_rows($resultado)> 0){
        
        $_SESSION['iniciada']='ok';
        $_SESSION['usuario']=$usuario;
        header('Location: ./index.php');
        $_SESSION['mensaje']="";

        die();
    }
    

    //echo mysqli_query($conn, $login);
    header('Location: ./login.php');
    $_SESSION['mensaje']="Error al inicio de session";
    //echo "ocurrio un error al iniciar sesion";


    

}

?>
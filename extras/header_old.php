<?
/*if ($_SESSION['iniciada']!='ok') {
    header('Location: /tiendaenlinea/login.php');
}*/
$usuario="invitado";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
<header>
        <nav class="navbar-top">
            <ul class="navbar-top-ul">
                <li class="navbar-top-item">
                    <a href="login.php" class="navbar-top-links">Registro</a>
                </li>
                <li class="navbar-top-item">
                    <a href="login.php" class="navbar-top-links">Iniciar sesión</a>
                </li>
                <li class="navbar-top-item">
                    <a href="#" class="navbar-top-links">
                        <i class="zmdi zmdi-shopping-cart"></i> Carrito
                        <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="navbar">
            <header class="nabvar-mobile is-size-5-mobile">
                <a class="navbar-mobile-link has-text-white" href="#" id="btn-mobile"><i class="zmdi zmdi-menu"></i></a>
                <a class="navbar-mobile-link has-text-white" href="#">Avenue Fashion</a>
                
                <a class="navbar-mobile-link has-text-white" href="index.html"><i class="zmdi zmdi-shopping-cart"></i> Vacio</a>
            </header>
            <nav class="nav-menu --nav-dark-light" id="mySidenav">
                <form class="form-group " action="#">
                    <div class="form-group-container">
                        <span class="form-group-icon"><i class="zmdi zmdi-search"></i></span>
                        <input type="text" class="form-group-input" placeholder="Buscar...">
                    </div>
                </form>

                <a class="is-hidden-mobile brand is-uppercase has-text-weight-bold has-text-dark" href="index.html">Avenue
                    Fashion</a>
                <ul class="nav-menu-ul">
                    <li class="nav-menu-item" id="men">
                        <a class="nav-menu-link link-submenu" href="#">Hombre <i
                                class="zmdi zmdi-chevron-down"></i></a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Casual</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisas Polo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Formal</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Trajes</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="ads is-hidden-touch">
                                <h1 class="ads-h1">Ofertas de Verano</h1>
                                <h2 class="ads-h2">Desde el 50% de descuento</h2>
                            </div>
                        </div>
                    </li>
                    <li class="nav-menu-item" id="women">
                        <a href="#" class="nav-menu-link link-submenu">Mujer <i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">

                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Casual</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisas Polo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Formal</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Trajes</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="ads is-hidden-touch">
                                <h1 class="ads-h1">Ofertas de Verano</h1>
                                <h2 class="ads-h2">Desde el 50% de descuento</h2>
                            </div>
                        </div>
                    </li>
                    <li class="nav-menu-item"><a href="brand.html" class="nav-menu-link">La Marca</a></li>
                    <li class="nav-menu-item"><a href="productos.php" class="nav-menu-link">Productos</a></li>
                    <li class="nav-menu-item"><a href="login.php" class="nav-menu-link active">Registro</a></li>
                    <li class="nav-menu-item"><a href="login.php" class="nav-menu-link">Iniciar Sesión</a></li>
                    <li class="nav-menu-item"><a href="login.php" class="nav-menu-link"><?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : '' ;?></a></li>
                </ul>
            </nav>
        </nav>
    </header>
    
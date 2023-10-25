<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="http://localhost/tienda_en_linea/style.css">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tienda de ropa de moda para hombres y mujeres">
    <meta name="keywords" content="ropa, moda, tendencias, tienda, accesorios">
    <title>Alta Pinta - Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Adamina&family=Albert+Sans:wght@200&family=Merriweather:wght@900&family=Roboto:ital,wght@1,100&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@200&family=Merriweather:wght@900&family=Roboto:ital,wght@1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Adamina&family=Albert+Sans:wght@200&family=Merriweather:wght@900&family=Roboto:ital,wght@1,100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    
</head>

<body>
    <header>
        <nav>
            <div class="container-nav">
                <!-- Carrito y precio de compra total -->
                <div>
                    <ul class="carrito">
                        <li id="inicio"><span class="material-symbols-outlined">
                                shopping_cart
                            </span><sup id="ItemsCarrito">0</sup></li>
                        <li>
                            <a href="./login.php" >
                                <span class="material-symbols-outlined">
                                <?php echo isset($_SESSION['usuario']) ? $_SESSION['usuario'] : '' ;?>
                                </span></li>
                            </a>
                    </ul>
                </div>
                <div class="busqueda">
                    <form action="" hidden>
                        <label for="busqueda" class="">buscar</label>
                            <input type="text" name="busqueda" id="busqueda" placeholder="SEARCH">

                    </form>
                </div>
                <!-- Logo central -->
                <div class="logo-principal">
                    <a href="./index.php">
                        <span><img src="img/icons/logo-blanco.png" alt=""></span>
                    </a>
                </div>
                <hr>

                <div class="contenedor-Redes">
                    <div class="cajitas"><a href="productos.php">Productos</a></div>
                    <div class="cajitas camisetas"><a href="productoCamisas.php">Camisas</a></div>
                    <div class="cajitas"><a href="productoPantalones.php">Pantalones</a></div>
                    <div class="cajitas"><a href="productoChaquetas.php">Chaquetas</a></div>
                    <div class="cajitas"><a href="productoZapatos.php">Zapatos</a></div>
                    <div class="cajitas"><a href="sobreNosotros.php">Más</a></div>
                </div>

            </div>
        </nav>
    </header>
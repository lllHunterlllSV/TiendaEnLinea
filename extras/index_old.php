
<?php
session_start();
if ($_SESSION['iniciada']!='ok') {
    header('Location: /tiendaenlinea/login.php');
}

include('./header.php');


?>
    <!-- Banner -->
    <div class="banner banner-cover">
        <div class="banner-container ">
            <h1 class="title-cover">AVE</h1>
            <a class="btn btn-default">Comprar colección para Hombres</a>
        </div>
    </div>

    <!-- Barra de navegacion secundaria -->
    <div class="container">
        <nav class="nav">
            <a class="nav-item active has-text-weight-semibold" href="#">Popular</a>
            <a class="nav-item has-text-weight-semibold" href="#">Novedades</a>
            <a class="nav-item has-text-weight-semibold" href="#">Más vendidos</a>
            <a class="nav-item has-text-weight-semibold" href="#">Ofertas</a>
            <a class="nav-item has-text-weight-semibold" href="#">Muy pronto</a>
        </nav>
    </div>
    <!-- Sección de fotografías -->
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-full-mobile">
                <div class="columns is-centered is-mobile is-multiline">
                    <!-- 1 Sección de fotografías -->
                    <div class="column is-half column-full">
                        <div class="card">
                            <span class="price">$89.99</span>
                            <img src="img/item-1.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $89.99 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-shopping-cart"></i></a>
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-favorite-outline"></i></a>
                                    <a href="producto.html" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-full is-half">
                        <div class="card">
                            <span class="price">$47.50</span>
                            <img src="img/item-2.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $47.50 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-shopping-cart"></i></a>
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-favorite-outline"></i></a>
                                    <a href="producto.html" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-full">
                        <div class="card">
                            <span class="price">$65.95</span>
                            
                                <img src="img/item-3.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $65.95 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-shopping-cart"></i></a>
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-favorite-outline"></i></a>
                                    <a href="producto.html" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segunda sección de fotografías -->
            <div class="column is-half is-full-mobile">
                <div class="columns is-mobile is-multiline">
                    <div class="column is-full">
                        <div class="card">
                            <span class="price"><strike>$107</strike> $89.99</span>
                                <img src="img/item-4.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $89.99 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-shopping-cart"></i></a>
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-favorite-outline"></i></a>
                                    <a href="producto.html" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-full is-half">
                        <div class="card">
                            <span class="price">$29.99</span>
                            <img src="img/item-5.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $29.99 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-shopping-cart"></i></a>
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-favorite-outline"></i></a>
                                    <a href="producto.html" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column column-full is-half">
                        <div class="card">
                            <span class="price">$34.79</span>
                            <img src="img/item-6.png" alt="">
                            <div class="card-info">
                                <h4 class="has-text-black has-text-centered has-text-weight-bold"> Women's Burnt Orenge
                                    Casual TEE $34.79 </h4>
                                <p class="has-text-centered">Classic casual t-shirt for women on the move.
                                    100%
                                    cotton.</p>
                                <div class="card-buttons">
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-shopping-cart"></i></a>
                                    <a href="#" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-favorite-outline"></i></a>
                                    <a href="producto.html" class="btn btn--mini-rounded"><i
                                            class="zmdi zmdi-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-full">
    <div class="columns is-centered is-multiline">
        <div class="column is-full">
            <div class="separator"></div>
        </div>
        <div class="column is-half-tablet is-one-third-desktop column-half">
            <div class="card card-second">
                <img class="card-second-image" src="img/lookbook-men.png" alt="">
                <div class="card-second-body --text-right">
                    <h1 class="has-text-right is-size-4 has-text-weight-semibold-bold">Catálogo para hombres</h1>
                    <p class="has-text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatum labore quae reiciendis, corrupti debitis dicta
                    </p>
                    <div>
                        <a href="#" class="btn btn-default is-size-7">Ver ahora</a>
                    </div>
                    </p>
                    
                    
                </div>
            </div>
        </div>
        <div class="column is-half-tablet is-one-third-desktop column-half">
            <div class="card card-second">
                <img class="card-second-image" src="img/lookbook-women.png" alt="">
                <div class="card-second-body --text-right">
                    <h1 class="has-text-right is-size-4 has-text-weight-semibold-bold">Catálogo para hombres</h1>
                    <p class="has-text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatum labore quae reiciendis, corrupti debitis dicta
                    </p>
                    <div>
                        <a href="#" class="btn btn-default is-size-7">Ver ahora</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="column is-half-tablet is-one-third-desktop">
            <div class="card card-second">
                <img class="card-second-image" src="img/lookbook-you.png" alt="">
                <div class="card-second-body --text-right">
                    <h1 class="has-text-right is-size-4 has-text-weight-semibold-bold">Catálogo para hombres</h1>
                    <p class="has-text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatum labore quae reiciendis, corrupti debitis dicta
                    </p>
                    <div>
                        <a href="#" class="btn btn-default is-size-7">Ver ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Información</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">La marca</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Local stores</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Servicios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Mapa del sitio</a></li>
                    </ul>
                </div>

                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Porqué comprar</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios y retornos</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios seguros</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Testimonios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Award waining</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Etival trading</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Tu cuenta</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Iniciar sesión</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Registro</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver carrito </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver catálogo</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Track an order</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Catalogo</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para hombres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column">

                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Datos de contacto</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Head</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column is-full">
                    <div class="footer-socials">
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-twitter"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-instagram"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bar-top">
            <div class="container">
                <a class="footer-bar-top-links" href="#">2019 Avenue Fashion</a>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>


</body>

</html>
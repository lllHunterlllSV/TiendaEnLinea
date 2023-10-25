<?php
session_start();
if ($_SESSION['iniciada']!='ok') {
    header('Location: /tienda_en_linea/login.php');
}

include('./header.php');


?>


    <!-- Un grid de 5x6 dejando un espacio en medio -->
    <main class="main-principal">
        <!--Imagen principal-->
        
        <h2 style="text-align: center;">Productos Nuevos</h2>
        <div id="">
            <div class="img-main">
                <h1>Ropa Vinta|ge </h1>
                <img src="./img/ropa-vintage.jpg" alt="ropa Vintage">
            </div>
            <div class="img-main">
                <img src="./img/ropa-oversize.webp" alt="ropa oversize">
                <h1>Ropa Oversize</h1>
            </div>

        </div>
        



        </div>
        <!--Contenido a modificar Fin-->

    </main>
    

    <?php include 'footer.php'; ?>
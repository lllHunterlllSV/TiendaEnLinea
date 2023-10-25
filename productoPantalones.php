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
        <div class="container-ropa1">

            <?php
                $servername = "localhost";
                $database = "tiendaenlinea";
                $username = "root";
                $password = "";
                
                $conn = mysqli_connect($servername, $username, $password, $database);

                $sql = "SELECT * FROM productos WHERE tipo=2";
                $resultado = mysqli_query($conn, $sql);
                
                foreach ($resultado as $row) {
                    echo '<div class="img-grid producto one"><img src="img/'.$row['foto'].'" alt="foto del producto"> <p class="descripcion">'. $row['nombre'] . '</p>
                    <p class="descripcionHidden" hidden>'.$row['descripcion'].'</p><p class="precioHidden" hidden>'.$row['precio'].'</p></div>';
                }
                
            ?>


        </div>
        



        </div>
        <!--Contenido a modificar Fin-->

    </main>
    

    <?php include 'footer.php'; ?>
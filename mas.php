<?php
session_start();
if ($_SESSION['iniciada']!='ok') {
    header('Location: /tienda_en_linea/login.php');
}

include('./header.php');


?>


    <!-- Un grid de 5x6 dejando un espacio en medio -->
    <section class="main-mas">
        <!--Imagen principal-->
        
        <p  class="text-autores">Autores</p>
        

        <div class="githubs">
            <a href="https://github.com/Arbenidas"><img src="img/diegogit.png" alt=""></a>
            <a href="https://github.com/lllHunterlllSV"><img src="img/edwingit.png" alt=""></a>



        </div> 
        <div class="githubs">

            <a href="https://github.com/RafaelED"><img src="img/rafagit.png" alt=""></a>
            <a href="https://github.com/Manuel794"><img src="img/manuelgit.png" alt=""></a>



        </div> 

      
        
       
    




  
            


</section>
        



        </div>
        <!--Contenido a modificar Fin-->

    </main>
    

    <?php include 'footer.php'; ?>
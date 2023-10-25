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
        <div id="sobreNosotros">

        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/A8CDVkV5pso?si=kWGkSdQG7kOYPf8-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->

        <video controls autoplay muted width=80% >
            <source src="./video/video_ropa.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta video
        </video>

        <h1>Sobre Nosotros - Alta Pinta</h1>
            
        <p >
        
        Bienvenidos a Alta Pinta, tu destino de moda en línea. En Alta Pinta, nuestra pasión es ayudarte a expresar tu estilo único a través de una cuidadosa selección de prendas de alta calidad y diseño vanguardista.

        En el corazón de nuestra filosofía se encuentra la creencia de que la moda es mucho más que ropa; es una forma de comunicar quiénes somos y lo que valoramos. Por eso, nos esforzamos por ofrecer una amplia gama de prendas y accesorios que reflejan la diversidad y singularidad de nuestros clientes. Queremos que encuentres la prenda perfecta para cada ocasión, desde la comodidad de tu hogar.

        En Alta Pinta, apostamos por la excelencia en cada aspecto de nuestra tienda en línea. Nuestra misión es proporcionarte una experiencia de compra inigualable, combinando la comodidad de las compras en línea con la atención al cliente personalizada. Nuestro equipo de moda está siempre a tu disposición para responder tus preguntas y asesorarte en tus decisiones de estilo.

        </p>


        </div>
        



        </div>
        <!--Contenido a modificar Fin-->

    </main>
    

    <?php include 'footer.php'; ?>
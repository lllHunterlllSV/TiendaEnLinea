<div id="modal" class="modal">
            <span class="cerrar" onclick="cerrarModal()">&times;</span>
            <img class="modal-contenido" id="imagenModal">
            <div id="descripcionModal" class="descripcion-modal"></div>
            <div class="contenedore">
                <table>
                    <thead>
                        <tr>
                            <th>Talla</th>
                            <th>Precio Estimado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pequeña (S)</td>
                            <td id="precioP">$20.00</td>
                        </tr>
                        <tr>
                            <td>Mediana (M)</td>
                            <td id="precioM">$22.00</td>
                        </tr>
                        <tr>
                            <td>Grande (L)</td>
                            <td id="precioG">$24.00</td>
                        </tr>
                        <tr>
                            <td>Extra Grande (XL)</td>
                            <td id="precioE">$26.00</td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn-3d" type="button">Añadir a carrito</button>
            </div>
        </div>
<footer>
        <div class="container">
            <div class="logo">
                <span><img src="img/icons/logo-blanco.png" alt=""></span>
            </div>
            <ul id="info">
                <li><a href="mas.php">Contactanos</a></li>
                <li><a href="">Patrocinadores</a></li>
                <li><a href="https://www.ufg.edu.sv/" target="blank">UFG</a></li>
            </ul>
        </div>
        <div class="contenedor-Redes">

            <div class="cajas">
                <a href="https://www.facebook.com/" target="_blank"><img src="img/icons/icons8-facebook.svg" alt=""></a>
            </div>
            <div class="cajas">
                <a href="https://twitter.com/home" target="_blank"><img src="img/icons/icons8-twitterx(1).svg" alt=""></a>
            </div>
            <div class="cajas"><a href="https://www.instagram.com/" target="_blank"><img src="img/icons/icons8-instagram.svg" alt=""></a></div>


        </div>
        <div class="copyRight">
            <span id="icon">&copy;TeamPW. All rights reserved. </span>
            <span id="logoArriba">
                <a href="#inicio">
                    <span class="material-symbols-outlined">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                            <polygon points="50,20 80,60 65,60 65,80 35,80 35,60 20,60" fill="#ffffff" />
                        </svg>

                    </span>
                </a>

            </span>
        </div>
    </footer>
    <!-- Script de cards emergentes -->
    <script>const modal = document.getElementById('modal');
        const imagenModal = document.getElementById('imagenModal');
        const descripcionModal = document.getElementById('descripcionModal');
        const productos = document.querySelectorAll('.producto');

        const precioP = document.getElementById('precioP');
        const precioM = document.getElementById('precioM');
        const precioG = document.getElementById('precioG');
        const precioE = document.getElementById('precioE');


        function abrirModal(imagenSrc, descripcion, precio) {
            modal.style.display = 'block';
            imagenModal.src = imagenSrc;
            descripcionModal.textContent = descripcion;
            precioP.innerHTML = Math.trunc(precio*0.7 * 100) / 100;
            precioM.innerHTML = Math.trunc(precio*1 * 100) / 100;
            precioG.innerHTML = Math.trunc(precio*1.1 * 100) / 100;
            precioE.innerHTML = Math.trunc(precio*1.3 * 100) / 100;

        }

        function cerrarModal() {
            modal.style.display = 'none';
        }

        productos.forEach(producto => {
            producto.addEventListener('click', () => {
                const imagenSrc = producto.querySelector('img').src;
                const descripcion = producto.querySelector('.descripcionHidden').textContent;
                const precio = producto.querySelector('.precioHidden').textContent;
                abrirModal(imagenSrc, descripcion, precio);
            });
        });

        window.onclick = function (event) {
            if (event.target == modal) {
                cerrarModal();
            }
        }
    </script>
</body>

</html>
<footer class="footer-sitio pt-3 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates ut delectus ducimus, debitis quaerat quisquam nisi modi earum. Expedita, illum laboriosam quasi est voluptatem sunt mollitia deserunt quae, molestiae iure!</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="text-uppercase  pb-4">
                    Horario
                </h3>
                <p>Lun-Vier: 9AM - 7PM</p>
                <p>Sábado: 10AM - 2PM</p>
                <p>Domingo: Cerrado</p>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="text-uppercase pb-4">
                    Contacto
                </h3>
                <p>66 East Sunnyslope Avenue</p>
                <p>Kandsdowne, PA 19050</p>
                <nav class="sociales text-center">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com"> <span class="sr-only"> Facebook </span> </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com"> <span class="sr-only"> Twitter </span> </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com"> <span class="sr-only"> Instagram </span> </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com"> <span class="sr-only"> Pinterest </span> </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com"> <span class="sr-only"> Youtube </span> </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--COL-MD-4-->
            <hr class="w-100">
            <p class="text-center copy w-100">Carolina Spa & Salon 2018 &copy;</p>
        </div>
        <!--ROW-->
    </div>
</footer>

<script src="js/jquery.slim.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>

</html>

<?php
// Guarda todo el contenido a un archivo
$fp = fopen($archivoCache, 'w');
fwrite($fp, ob_get_contents());
fclose($fp);
// Enviar al navegador
ob_end_flush();
?>


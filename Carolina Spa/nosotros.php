<?php
$titulo = 'Nosotros';
include "templates/header.php";
include "templates/navegacion.php";
?>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/nosotros.jpg" alt="Nosotros" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
        </div>
    </div>
</div>

<div class="container pt-4">
    <div class="row no-gutters">
        <main class="col-lg-8 contenido-principal pr-lg-3">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Nosotros
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos asperiores vitae iste quae, fugit adipisci nobis ipsam enim consequuntur distinctio totam, a unde dolores veritatis molestias reiciendis saepe cumque dolor.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi ullam molestiae rem vel magni dolorem, repellendus ab, voluptate itaque ex qui, atque quaerat obcaecati suscipit delectus hic est unde! Eligendi.</p>
            <h2 class="text-center text-capitalize mt-5 encabezado">
                <span class="text-lowercase d-block">conoce nuestras</span>
                instalaciones
            </h2>
            <div class="imagenes pt-4 text-center mb-3">
                <a href="#" data-target="#imagen_1" data-toggle="modal">
                    <img src="img/galeria_mini_01.jpg" alt="galeria" class="img-fluid">
                </a>
                <a href="#" data-target="#imagen_2" data-toggle="modal">
                    <img src="img/galeria_mini_02.jpg" alt="galeria" class="img-fluid">
                </a>
                <a href="#" data-target="#imagen_3" data-toggle="modal">
                    <img src="img/galeria_mini_03.jpg" alt="galeria" class="img-fluid">
                </a>

                <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/galeria_grande_01.jpg" alt="galeria" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="imagen_2" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/galeria_grande_02.jpg" alt="galeria" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="imagen_3" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img src="img/galeria_grande_03.jpg" alt="galeria" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
            <div class="sidebar horario p-3">
                <h2 class="text-center text-uppercase mt-3">
                    Horarios
                </h2>
                <p class="text-center lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sit aperiam quis placeat veritatis autem saepe excepturi aliquid impedit labore hic rerum rem sunt facilis ab, quod velit, ut omnis!</p>
                <table class="table table-hover text-center mt-3">
                    <thead>
                        <tr>
                            <th class="text-center">Día</th>
                            <th class="text-center">De</th>
                            <th class="text-center">Hasta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lunes</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Martes</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Miércoles</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Jueves</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Viernes</td>
                            <td>09:00</td>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>Sábado</td>
                            <td>10:00</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>Domingo</td>
                            <td>Cerrado</td>
                            <td>Cerrado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </aside>
    </div>
</div>

<?php
include "templates/footer.php";
?>
<?php
$titulo = 'Productos';
include "templates/header.php";
include "templates/navegacion.php";
include "includes/funciones.php";
?>

<div class="container pt-4">
    <div class="row no-gutters">
        <div class="col-12 hero">
            <img src="img/productos.jpg" alt="Productos" class="img-fluid">
            <h2 class="text-uppercase d-none d-md-block py-3 px-5">Productos</h2>
        </div>
    </div>
</div>

<div class="container pt-4 productos">
    <div class="row">
        <main class="col-lg-12 contenido-principal">
            <h2 class="d-block d-md-none text-uppercase text-center">
                Productos
            </h2>
            <div class="row no-gutters">
                <div class="card-columns">
                    <?php
                    $productos = obtenerProductosTotal();
                    while($producto = $productos->fetch_assoc()){
                    ?>
                    <div class="card">
                        <a href="producto.php?id=<?php echo $producto['id']; ?>">
                            <img src="img/<?php echo $producto['imagen_mini']; ?>" alt="producto" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h3 class="card-title text-center text-uppercase">
                                    <?php echo $producto['nombre']; ?>
                                </h3>
                                <p class="card-text text-uppercase">
                                    <?php echo $producto['descripcion_corta']; ?>
                                </p>
                                <p class="precio lead mb-0 text-center">$<?php echo $producto['precio']; ?></p>
                            </div>
                        </a>
                    </div>
                    <!--Card -->
                    <?php
                    }
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>

<?php
include "templates/footer.php";
?>

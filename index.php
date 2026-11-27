<?php
define('ACCESO_PERMITIDO', true);
require_once './includes/conexion.php';
?>

<?php include './includes/header.php'; ?>

<section class="hero container text-center">

    <h1>Recetario Colaborativo</h1>

    <p class="lead">
        Descubre, crea y comparte recetas de cocina.
    </p>

    <a href="./pages/recetas.php" class="btn btn-primary">
        Ver recetas
    </a>

    <a href="./pages/crear_receta.php" class="btn btn-outline-primary">
        Crear receta
    </a>

</section>

<section class="container mt-5">

    <h2 class="text-center mb-4">
        Recetas destacadas
    </h2>

    <div class="row g-4">

    <div class="col-md-4">
        <div class="card h-100">

            <img src="https://placehold.co/600x400"
                 class="card-img-top"
                 alt="Ensalada mediterránea">

            <div class="card-body">

                <h5 class="card-title">
                    Ensalada mediterránea
                </h5>

                <a href="./pages/detalle_receta.php" class="btn btn-primary">
                    Ver detalle
                </a>

            </div>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100">

            <img src="https://placehold.co/600x400"
                 class="card-img-top"
                 alt="Pasta con verduras">

            <div class="card-body">

                <h5 class="card-title">
                    Pasta con verduras
                </h5>

                <a href="#" class="btn btn-primary">
                    Ver detalle
                </a>

            </div>

        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100">

            <img src="https://placehold.co/600x400"
                 class="card-img-top"
                 alt="Tarta de manzana">

            <div class="card-body">

                <h5 class="card-title">
                    Tarta de manzana
                </h5>

                <a href="#" class="btn btn-primary">
                    Ver detalle
                </a>

            </div>

        </div>
    </div>

</div>

</section>

<?php include './includes/footer.php'; ?>
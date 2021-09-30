<?php
require './menus.php';
?>

<main class="margen-top container-fluid px-0">
    <section id="myCarousel" class="carousel slide" data-bs-ride="carousel"></section>

    <section class="servicios mt-5" id="servicios">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h1 class="mt-4">Servicios</h1>
                    <span class="border-1"> </span>
                </div>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-md-8">

                    <?php
                    if (
                        isset($_POST['title']) && !empty($_POST['title']) &&
                        isset($_POST['image']) && !empty($_POST['image']) &&
                        isset($_POST['description']) && !empty($_POST['description']) &&
                        isset($_POST['category']) && !empty($_POST['category'])
                    ) {
                    ?>
                        <div class="card">
                            <img src="<?php echo $core . $_POST['image']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title mb-3"><?php echo $_POST['title']; ?></h5>
                                <p class="card-text"><?php echo $_POST['description']; ?></p>
                            </div>
                        </div>
                        <div class="row g-3 justify-content-center mt-3">
                            <div class="col-md-4 text-center">
                                <a href="index.php#servicios" class="btn btn-secondary">Atrás</a>
                            </div>
                        </div>

                    <?php } else { ?>
                        <div class="row g-3 justify-content-center mt-1">
                            <div class="col-md-4 text-center">
                                <a href="index.php#servicios" class="btn btn-secondary">Todos los servicios</a>
                            </div>
                        </div>
                    <?php }
                    ?>

                </div>
            </div>
        </div>
    </section>
</main>

<?php
require './footer.php'
?>
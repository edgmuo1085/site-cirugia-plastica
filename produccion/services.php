<?php
require './menus.php';
?>

<main class="margen-top container-fluid px-0">
    <section id="myCarousel" class="carousel slide" data-bs-ride="carousel"></section>

    <section class="biografia container-fluid" id="quienes-somos">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center">
                <h1 class="mt-4">Doctor Rafael Barrera Vázquez</h1>
                <span class="border-1"> </span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center px-0">
                <img src="./public/img/doctor-rafael.jpg" alt="doctor-rafael" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p class="mt-4 px-4 font-size-1">
                    El Doctor <strong>RAFAEL BARRERA VÁZQUEZ</strong> es médico general titulado con mención honorífica de la facultad de medicina de la <strong>Universidad Nacional Autónoma de México</strong>, con cédula profesional: 2436741; cuenta
                    con estudios de posgrado en cirugía general y una capacitación continua donde destacan cursos y congresos avalados por instituciones gubernamentales y del sector privado de gran prestigio en nuestro país, fue jefe de residentes
                    en el primer año de cirugía general (de 1997 a 1998); profesor ayudante de patología para alumnos del 4&deg; año en el Hospital General de Zona Troncoso (de 1997 a 1998); profesor ayudante del curso de cirugía general para alumnos
                    del 4º año de la UNAM. Sede Hospital General de Zona Francisco del Paso y Troncoso (de 1997 a 1998); profesor ayudante del curso de cirugía general para alumnos del tercer año de cirugía general de la universidad ANÁHUAC.
                </p>
            </div>
        </div>
    </section>

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
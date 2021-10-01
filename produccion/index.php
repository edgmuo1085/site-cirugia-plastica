<?php
require './menus.php';
?>

<main class="margen-top container-fluid px-0">
	<section id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="bd-placeholder-img" src="./public/img/slider/slider-001.png" width="100%" height="100%">

				<div class="container">
					<div class="carousel-caption text-start d-none d-md-block d-lg-block d-xl-block">
						<h1>Cirugía Plástica</h1>
						<p>Brindar la mejor atención médica a los pacientes que buscan y desean un cambio físicamente y emocionalmente.</p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="bd-placeholder-img" src="./public/img/slider/slider-001.png" width="100%" height="100%">

				<div class="container">
					<div class="carousel-caption d-none d-md-block d-lg-block d-xl-block">
						<h1>Cirugía Plástica</h1>
						<p>Brindar la mejor atención médica a los pacientes que buscan y desean un cambio físicamente y emocionalmente.</p>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</section>

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
					El Doctor <strong>RAFAEL BARRERA VÁZQUEZ</strong> es cirujano plástico titulado con mención honorífica de la facultad de medicina de la <strong>Universidad Nacional Autónoma de México</strong>, con cédula profesional: 2436741; cuenta
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
			<div class="row g-3 hover-img">

				<?php
				$fileCategories = fopen("public/folder/category.txt", "r");
				$fileServices = fopen("public/folder/servicios.txt", "r");
				$categories = array();
				$services = array();
				$servicio = '';
				$once = 1;
				$count = 0;
				$postData = null;

				while (!feof($fileCategories)) {
					$linea1 = fgets($fileCategories);
					$category = explode('|', $linea1);
					$categories[] = array(
						"category" => $category[0],
						"description" => $category[1]
					);
				}

				while (!feof($fileServices)) {
					$linea2 = fgets($fileServices);
					$service = explode('|', $linea2);
					$services[] = array(
						"title" => $service[0],
						"image" => $service[1],
						"description" => $service[2],
						"category" => $service[3]
					);
				}

				foreach ($categories as $category) {

					$servicio = '<div class="col-md-3">
							<div class="card shadow-sm">

								<div id="carouselExampleControls' . $count . '" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">';
					foreach ($services as $slice) {
						if (strval($category['category']) == strval($slice['category'])) {
							$postData = implode("._.", array_values($slice));
							if ($once === 1) {
								$servicio .= '<div class="carousel-item active" id="modalImg">
											<img onclick="redirectPost(\'' . $postData . '\')" src="' . $core . $slice['image'] . '" class="d-block w-100" alt="' . $slice['image'] . '">
										</div>
										';
							} else {
								$servicio .= '<div class="carousel-item">
											<img onclick="redirectPost(\'' . $postData . '\')" src="' . $core . $slice['image'] . '" class="d-block w-100" alt="' . $slice['image'] . '">
										</div>
										';
							}
							$once = 2;
						}
					}
					$once = 1;

					$servicio .= '</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls' . $count . '" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls' . $count . '" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>

								<div class="card-body">
									<p class="card-text">' . substr($category['description'], 0, 100) . ' ...</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group"></div>
									</div>
								</div>

							</div>
						</div>
						';

					echo $servicio;
					$count++;
				}

				fclose($fileCategories);
				fclose($fileServices);
				?>

			</div>
		</div>
	</section>

	<?php
	$iconToast = '';
	$$msgToast = '';

	if (isset($_GET['r']) && !empty($_GET['r'])) {
		if ($_GET['r'] == '1') {
			$iconToast = '<img src="./public/img/ok.svg" width="20px" class="rounded me-2" alt="ok">';
			$msgToast = 'Gracias por contactarnos. Tu mensaje será leído y contestado pronto.';
		}
		if ($_GET['r'] == '2') {
			$iconToast = '<img src="./public/img/cancelar.svg" width="20px" class="rounded me-2" alt="cancelar">';
			$msgToast = 'No fue posible enviar tu mensaje. Intentalo otra vez.';
		}
	}
	?>

	<div class="position-fixed bottom-0 start-50 translate-middle-x p-3" style="z-index: 11">
		<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
			<div class="toast-header">
				<?php echo $iconToast; ?>
				<strong class="me-auto">Contactenos</strong>
				<small><?php echo $date; ?></small>
				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
			</div>
			<div class="toast-body">
				<?php echo $msgToast; ?>
			</div>
		</div>
	</div>
</main>

<?php
require './footer.php'
?>
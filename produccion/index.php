<?php
date_default_timezone_set('America/Mexico_City');
$date = Date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, follow">
	<title>.::Cirugía Plastica a tu alcance Rafael Barrera::.</title>
	<link rel="shortcut icon" type="image/x-icon" href="./public/img/favicon.png">
	<meta name="description" content="El Doctor RAFAEL BARRERA VÁZQUEZ es médico general titulado con mención honorífica de la facultad de medicina de la Universidad Nacional Autónoma de México.">
	<meta name="keywords" content="Rafael,Barrera,Rafael Barrera,Cirujano,Plástico,Cirujano Plástico, Abdominoplastia, Cirujano plástico certificado, Implante de senos, Cirugia Plástica, Rinoplastia" />
	<meta property="og:locale" content="es_MX" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Cirugía Plastica a tu alcance Rafael Barrera" />
	<meta property="og:description" content="El Doctor RAFAEL BARRERA VÁZQUEZ es médico general titulado con mención honorífica de la facultad de medicina de la Universidad Nacional Autónoma de México." />
	<meta property="og:url" content="https://www.drrafaelbarrera.com.mx" />
	<meta property="og:site_name" content="Cirugia_Plastica" />
	<meta property="article:published_time" content="<?php echo $date; ?>" />
	<meta property="og:image" content="https://www.drrafaelbarrera.com.mx/public/img/doctor-rafael.jpg" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="./public/css/main.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
</head>

<body>
	<header id="inicio">
		<nav class="navbar boxshadow navbar-expand-sm navbar-light header-bg fixed-top" aria-label="navbar">
			<div class="container">
				<a class="navbar-brand" href="#"> <img src="./public/img/firma.png" alt="firma" height="60"> </a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsPage" aria-controls="navbarsPage" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-md-end" id="navbarsPage">
					<ul class="navbar-nav mb-2 mb-sm-0 color-white">
						<li class="nav-item"> <a class="nav-link text-uppercase" aria-current="page" href="#inicio">Inicio</a> </li>
						<li class="nav-item"> <a class="nav-link text-uppercase" href="#quienes-somos">Quienes Somos</a> </li>
						<li class="nav-item"> <a class="nav-link text-uppercase" href="#servicios">Servicios</a> </li>
						<li class="nav-item"> <a class="nav-link text-uppercase" href="#contactanos">Contáctanos</a> </li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main class="margen-top container-fluid px-0">
		<section id="myCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="bd-placeholder-img" src="./public/img/slider/slider-001.jpg" width="100%" height="100%">

					<div class="container">
						<div class="carousel-caption text-start d-none d-md-block d-lg-block d-xl-block">
							<h1>Cirugía Plástica</h1>
							<p>Brindar la mejor atención médica a los pacientes que buscan y desean un cambio físicamente y emocionalmente.</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="bd-placeholder-img" src="./public/img/slider/slider-001.jpg" width="100%" height="100%">

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
				<div class="row g-3 hover-img">

					<div class="col-md-3">
						<div class="card shadow-sm">

							<div id="carouselExampleControls0" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="./public/img/servicios/servicio-1.png" class="d-block w-100" alt="servicio-1.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-2.png" class="d-block w-100" alt="servicio-2.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-7.png" class="d-block w-100" alt="servicio-7.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-8.png" class="d-block w-100" alt="servicio-8.png">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls0" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls0" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

							<div class="card-body">
								<p class="card-text">Es la reconstrucción de la pared abdominal, que consta de eliminación del exceso de piel y grasa con el objetivo final de remodelar el abdomen, la cintura y la forma del tronco del cuerpo.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card shadow-sm">

							<div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="./public/img/servicios/servicio-9.png" class="d-block w-100" alt="servicio-9.png">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

							<div class="card-body">
								<p class="card-text">Cirugía que busca rejuvenecer los párpados mediante la remodelación de los tejidos perioculares.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card shadow-sm">

							<div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="./public/img/servicios/servicio-10.png" class="d-block w-100" alt="servicio-10.png">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

							<div class="card-body">
								<p class="card-text"></p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card shadow-sm">

							<div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="./public/img/servicios/servicio-3.png" class="d-block w-100" alt="servicio-3.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-11.png" class="d-block w-100" alt="servicio-11.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-12.png" class="d-block w-100" alt="servicio-12.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-13.png" class="d-block w-100" alt="servicio-13.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-14.png" class="d-block w-100" alt="servicio-14.png">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls3" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

							<div class="card-body">
								<p class="card-text">Es, desde hace años, una de las cirugías estéticas más solicitadas por las mujeres de entre 20 y 45 años, casi a la par de la liposucción.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card shadow-sm">

							<div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="./public/img/servicios/servicio-4.png" class="d-block w-100" alt="servicio-4.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-15.png" class="d-block w-100" alt="servicio-15.png">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls4" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

							<div class="card-body">
								<p class="card-text">La lipoescultura se realiza para zonas localizadas en las cuales la grasa no es demasiada y se tiene la oportunidad de dar mejor forma a dicha zona.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card shadow-sm">

							<div id="carouselExampleControls5" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="./public/img/servicios/servicio-5.png" class="d-block w-100" alt="servicio-5.png">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls5" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

							<div class="card-body">
								<p class="card-text">Generalmente, se conoce a la mastopexia como a la cirugía estética cuyo destino es arreglar los problemas de pecho caído.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card shadow-sm">

							<div id="carouselExampleControls6" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="./public/img/servicios/servicio-16.png" class="d-block w-100" alt="servicio-16.png">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls6" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

							<div class="card-body">
								<p class="card-text"></p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<div class="card shadow-sm">

							<div id="carouselExampleControls7" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="./public/img/servicios/servicio-6.png" class="d-block w-100" alt="servicio-6.png">
									</div>
									<div class="carousel-item">
										<img src="./public/img/servicios/servicio-17.png" class="d-block w-100" alt="servicio-17.png">
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls7" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>

							<div class="card-body">
								<p class="card-text">La rinoplastia es un procedimiento quirúrgico en el que se cambia la forma o el tamaño de la nariz para darle armonía y un aspecto simétrico.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>
	</main>

	<footer class="mt-5 footer-bg" id="contactanos">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-5 ml-3">

					<div class="row justify-content-center">
						<div class="md-10">
							<h2 class="footer-title">Contáctanos</h2>
							<p class="footer-informacion">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>05 874 526</span>
							</p>
							<p class="footer-informacion">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<span>rafael.barrera@gmail.com</span>
							</p>
							<p class="footer-informacion">
								<i class="fa fa-whatsapp" aria-hidden="true"></i>
								<span>+52 315 852 1020</span>
							</p>
						</div>
						<div class="md-10 mt-4">
							<h2 class="footer-title">Redes Sociales</h2>
							<div class="iconos-redes">
								<a href="#" target="_blank">
									<i class="fa fa-facebook-official" aria-hidden="true"></i>
								</a>
								<a href="#" target="_blank">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
								<a href="#" target="_blank">
									<i class="fa fa-youtube-play" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

				</div>
				<div class="col-md-5">
					<div class="footer-contacto">
						<p class="py-2 color-white footer-title-contact">Envianos tus dudas o comentarios completando este breve formulario</p>
						<form class="row g-3" method="POST" action="./public/mail/mail.php" autocomplete="off">
							<input hidden value="send" name="send" id="send">

							<div class="col-md-12">
								<label for="inputNombres" class="form-label color-white">Nombres completos</label>
								<input type="text" class="form-control" id="inputNombres" name="inputNombres">
							</div>
							<div class="col-md-12">
								<label for="inputEmail" class="form-label color-white">Correo electrónico</label>
								<input type="email" class="form-control" id="inputEmail" name="inputEmail">
							</div>
							<div class="col-12">
								<label for="inputTel" class="form-label color-white">Número Telefónico</label>
								<input type="text" class="form-control" id="inputTel" name="inputTel">
							</div>
							<div class="col-12">
								<label for="inputTextArea" class="form-label color-white">Mensaje</label>
								<textarea class="form-control" id="inputTextArea" name="inputTextArea" rows="3"></textarea>
							</div>
							<div class="d-grid gap-3">
								<button class="btn btn-secondary" type="submit">Enviar</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
		<span class="footer-linea"></span>
		<div class="container fluid">
			<div class="d-flex-footer text-center color-white mt-2">
				<div>Cirugia Plástica a tu Alcance</div>
				<div>Todos los Derechos Reservados</div>
				<div>
					&copy;
					<script>
						copyright = new Date();
						document.write(copyright.getFullYear())
					</script>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://use.fontawesome.com/bb6fec3165.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>.::Cirugia Plastica a tu alcance Erik Vargas Tellez::.</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
	<header id="inicio">
		<nav class="navbar boxshadow navbar-expand-sm navbar-light bg-light fixed-top" aria-label="navbar">
			<div class="container">
				<a class="navbar-brand" href="#"> <img src="img/firma.png" alt="firma" height="70"> </a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsPage" aria-controls="navbarsPage" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-md-end" id="navbarsPage">
					<ul class="navbar-nav mb-2 mb-sm-0 color-white">
						<li class="nav-item"> <a class="nav-link text-uppercase" aria-current="page" href="#inicio">Inicio</a> </li>
						<li class="nav-item"> <a class="nav-link text-uppercase" href="#quienes-somos">Quienes Somos</a> </li>
						<li class="nav-item"> <a class="nav-link text-uppercase" href="#servicios">Servicios</a> </li>
						<li class="nav-item"> <a class="nav-link text-uppercase" href="#">Galería</a> </li>
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
					<img class="bd-placeholder-img" src="img/slider/slider-001.jpg" width="100%" height="100%">

					<div class="container">
						<div class="carousel-caption text-start d-none d-md-block d-lg-block d-xl-block">
							<h1>Example headline.</h1>
							<p>Some representative placeholder content for the first slide of the carousel.</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="bd-placeholder-img" src="img/slider/slider-001.jpg" width="100%" height="100%">

					<div class="container">
						<div class="carousel-caption d-none d-md-block d-lg-block d-xl-block">
							<h1>Another example headline.</h1>
							<p>Some representative placeholder content for the second slide of the carousel.</p>
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
					<img src="img/doctor-rafael.jpg" alt="doctor-rafael" class="img-fluid">
				</div>
				<div class="col-md-6">
					<p class="mt-4 px-4 font-size-1">
						El Doctor <strong>RAFAEL BARRERA VÁZQUEZ</strong> es médico general titulado con mención honorífica de
						la facultad de medicina de la <strong>Universidad Nacional Autónoma de México</strong>, con cédula
						profesional: 2436741; cuenta con estudios de posgrado en cirugía general y una
						capacitación continua donde destacan cursos y congresos avalados por instituciones
						gubernamentales y del sector privado de gran prestigio en nuestro país, fue jefe de
						residentes en el primer año de cirugía general (de 1997 a 1998); profesor ayudante
						de patología para alumnos del 4&deg; año en el Hospital General de Zona Troncoso (de 1997
						a 1998); profesor ayudante del curso de cirugía general para alumnos del 4º año de
						la UNAM. Sede Hospital General de Zona Francisco del Paso y Troncoso (de 1997 a 1998);
						profesor ayudante del curso de cirugía general para alumnos del tercer año de cirugía
						general de la universidad ANÁHUAC.
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
							<img src="img/servicios/servicio-001.png" alt="servicios-1" class="img-fluid">

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">Visitar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">

						<div class="card shadow-sm">
							<img src="img/servicios/servicio-002.png" alt="servicios-2" class="img-fluid">

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">Visitar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">

						<div class="card shadow-sm">
							<img src="img/servicios/servicio-003.png" alt="servicios-3" class="img-fluid">

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">Visitar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">

						<div class="card shadow-sm">
							<img src="img/servicios/servicio-004.png" alt="servicios-4" class="img-fluid">

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">Visitar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">

						<div class="card shadow-sm">
							<img src="img/servicios/servicio-005.png" alt="servicios-5" class="img-fluid">

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">Visitar</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">

						<div class="card shadow-sm">
							<img src="img/servicios/servicio-006.png" alt="servicios-6" class="img-fluid">

							<div class="card-body">
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<div class="d-flex justify-content-between align-items-center">
									<div class="btn-group">
										<button type="button" class="btn btn-sm btn-outline-secondary">Visitar</button>
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
						<form class="row g-3">

							<div class="col-md-12">
								<label for="inputNombres" class="form-label color-white">Nombres completos</label>
								<input type="text" class="form-control" id="inputNombres">
							</div>
							<div class="col-md-12">
								<label for="inputEmail" class="form-label color-white">Correo electrónico</label>
								<input type="email" class="form-control" id="inputEmail">
							</div>
							<div class="col-12">
								<label for="inputTel" class="form-label color-white">Número Telefónico</label>
								<input type="text" class="form-control" id="inputTel">
							</div>
							<div class="col-12">
								<label for="inputTextArea" class="form-label color-white">Mensaje</label>
								<textarea class="form-control" id="inputTextArea" rows="3"></textarea>
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
			<div class="row justify-content-center text-center color-white mt-2">
				<p>
					Cirugia Plástica a tu Alcance<br>
					Todos los Derechos Reservados<br>
					&copy; <br>
					<script>
						copyright = new Date();
						document.write(copyright.getFullYear())
					</script><br>
				</p>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://use.fontawesome.com/bb6fec3165.js"></script>

</body>

</html>
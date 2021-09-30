<?php
date_default_timezone_set('America/Mexico_City');
$date = Date('Y-m-d H:i:s');
$core = './public/img/servicios/';
?>


<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='robots' content='noindex, follow'>
    <title>.::Cirugía Plastica a tu alcance Rafael Barrera::.</title>
    <link rel='shortcut icon' type='image/x-icon' href='./public/img/favicon.png'>
    <meta name='description' content='El Doctor RAFAEL BARRERA VÁZQUEZ es médico general titulado con mención honorífica de la facultad de medicina de la Universidad Nacional Autónoma de México.'>
    <meta name='keywords' content='Rafael,Barrera,Rafael Barrera,Cirujano,Plástico,Cirujano Plástico, Abdominoplastia, Cirujano plástico certificado, Implante de senos, Cirugia Plástica, Rinoplastia' />
    <meta property='og:locale' content='es_MX' />
    <meta property='og:type' content='website' />
    <meta property='og:title' content='Cirugía Plastica a tu alcance Rafael Barrera' />
    <meta property='og:description' content='El Doctor RAFAEL BARRERA VÁZQUEZ es médico general titulado con mención honorífica de la facultad de medicina de la Universidad Nacional Autónoma de México.' />
    <meta property='og:url' content='https://www.drrafaelbarrera.com.mx' />
    <meta property='og:site_name' content='Cirugia_Plastica' />
    <meta property='article:published_time' content='<?php echo $date; ?>' />
    <meta property='og:image' content='https://www.drrafaelbarrera.com.mx/public/img/doctor-rafael.jpg' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='./public/css/main.css' rel='stylesheet'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap' rel='stylesheet'>
</head>

<body id='inicio'>
    <header>
        <nav class='navbar boxshadow navbar-expand-sm navbar-light header-bg fixed-top' aria-label='navbar'>
            <div class='container'>
                <a class='navbar-brand' href='index.php'> <img src='./public/img/firma.png' alt='firma' height='60'> </a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarsPage' aria-controls='navbarsPage' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>

                <div class='collapse navbar-collapse justify-content-md-end' id='navbarsPage'>
                    <ul class='navbar-nav mb-2 mb-sm-0 color-white'>
                        <li class='nav-item'> <a class='nav-link text-uppercase' aria-current='page' href='#inicio'>Inicio</a> </li>
                        <li class='nav-item'> <a class='nav-link text-uppercase' href='#quienes-somos'>Quienes Somos</a> </li>
                        <li class='nav-item'> <a class='nav-link text-uppercase' href='#servicios'>Servicios</a> </li>
                        <li class='nav-item'> <a class='nav-link text-uppercase' href='#contactanos'>Contáctanos</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
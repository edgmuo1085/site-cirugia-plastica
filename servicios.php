<?php
require './sites/core/engines/config.php';
require './sites/core/engines/service.php';
$core = 'sites/public/img/servicios/';

$sl = new Service('');

$sliders = null;
$once = true;
$count = 0;

$sliders = $sl->getAll();
$categories = $sl->getCategory();

$servicio = '';

foreach ($categories as $category) {

    $servicio = "<div class='col-md-3'>
                        <div class='card shadow-sm'>

                            <div id='carouselExampleControls" . $count . "' class='carousel slide' data-bs-ride='carousel'>
                                <div class='carousel-inner'>";
    foreach ($sliders as $slice) {
        if ($category['category'] === $slice['category']) {
            if ($once) {
                $servicio .= "<div class='carousel-item active' id='modalImg'>
                                        <img onclick='modalShow(this.src)' src='" . $core . $slice['image'] . "' class='d-block w-100' alt='" . $slice['image'] . "'>
                                    </div>
                                    ";
            } else {
                $servicio .= "<div class='carousel-item'>
                                        <img onclick='modalShow(this.src)' src='" . $core . $slice['image'] . "' class='d-block w-100' alt='" . $slice['image'] . "'>
                                    </div>
                                    ";
            }
            $once = false;
        }
    }
    $once = true;

    $servicio .= "</div>
                                <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleControls" . $count . "' data-bs-slide='prev'>
                                    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                                    <span class='visually-hidden'>Previous</span>
                                </button>
                                <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleControls" . $count . "' data-bs-slide='next'>
                                    <span class='carousel-control-next-icon' aria-hidden='true'></span>
                                    <span class='visually-hidden'>Next</span>
                                </button>
                            </div>

                            <div class='card-body'>
                                <p class='card-text'>" . $category['description'] . "</p>
                                <div class='d-flex justify-content-between align-items-center'>
                                    <div class='btn-group'>
                                        <!--<button type='button' class='btn btn-sm btn-outline-secondary'>Visitar</button>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    ";

    echo $servicio;
    $count++;
}

<?php

$menu = "<header id='inicio'>
        <nav class='navbar boxshadow navbar-expand-sm navbar-light header-bg fixed-top' aria-label='navbar'>
            <div class='container'>
                <a class='navbar-brand' href='#'> <img src='";

                $menu .= "../../../public/img/firma.png";

                $menu .= "' alt='firma' height='60'> </a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarsPage' aria-controls='navbarsPage' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>

                <div class='collapse navbar-collapse justify-content-md-end' id='navbarsPage'>
                    <ul class='navbar-nav mb-2 mb-sm-0 color-white'>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle text-uppercase' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                Administración
                            </a>
                            <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'>
                                <li><a class='dropdown-item text-uppercase' href='../user/'>Usuarios</a></li>
                                <li><a class='dropdown-item text-uppercase' href='../service/'>Servicios</a></li>
                            </ul>
                        </li>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle text-uppercase' href='#' id='navbarScrollingDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>";
                                $menu .= $_SESSION['nombres'];
                            $menu .= "</a>
                            <ul class='dropdown-menu' aria-labelledby='navbarScrollingDropdown'>
                                <li><a class='dropdown-item' href='../login/'>CERRRAR SESIÓN</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>";
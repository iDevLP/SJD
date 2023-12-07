<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c596be5b04.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header class="main-header">
        <nav class="container main-navbar">
            <div class="main-menu-logo-section">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="logo" src="<?php echo get_theme_file_uri("img/logo.png"); ?>" alt="">
                    <span>Escuela San Juan De Dios</span>
                </a>
                <img class="main-menu-icon" src="<?php echo get_theme_file_uri("icons/bars-solid.svg") ?>" alt="">
            </div>
            <ul id="main-menu-link-container">
                <li class="link">
                    <a class="active" href="<?php echo esc_url(home_url('/')); ?>">
                        <i class="fa-solid fa-house"></i>
                        Inicio</a>
                </li>
                <li class="link">
                    <a href="<?php echo esc_url(home_url('actividades/')); ?>">
                        <i class="fa-solid fa-puzzle-piece"></i>
                        Actividades</a>
                </li>
                <li class="link">
                    <a href="<?php echo esc_url(home_url('escuela/')); ?>">
                        <i class="fa-solid fa-graduation-cap"></i>
                        Escuela</a>
                </li>
                <li class="link">
                    <a href="<?php echo esc_url(home_url('contacto/')); ?>">
                        <i class="fa-solid fa-phone"></i>
                        Contacto</a>
                </li>
                <li class="link">
                    <a href="<?php echo esc_url(home_url('admision/')); ?>" class="admision-link">
                        <i class="fa-solid fa-calendar-days"></i>
                        Admisión</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="menuAccesibilidad" class="menu-accesibilidad">
        <div class="menu-accesibilidad-letter-container">
            <button id="disminuirLetra"
                class="menu-accesibilidad__button-letra menu-accesibilidad__button"><span>-</span></button>
            <span>Letra</span>
            <button id="agrandarLetra"
                class="menu-accesibilidad__button-letra menu-accesibilidad__button"><span>+</span></button>
        </div>
        <button id="escalaGrises" class="menu-accesibilidad__button menu-accesibilidad__button-contraste"><i
                class="fa-solid fa-circle-half-stroke"></i><span class="">Contraste</span></button>
    </div>
    <div id="accesibilidadButton" class="accesibilidad-button">
        <i class="menu-accesibilidad-button__icon fa-solid fa-universal-access"></i>
    </div>
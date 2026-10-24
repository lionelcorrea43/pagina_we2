<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <title><?php this->getNombreApp()?></title>
</head>
<body class="app-layout">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top py-2">
    <div class="container py-1">
        <a class="navbar-brand fw-bold text-uppercase d-flex align-items-center fs-4" href="equipos">
            <i class="bi bi-trophy-fill me-2 text-warning" aria-hidden="true"></i>
           <span class="text-warning"><?php this->getNombreApp()?></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Abrir menú">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item px-2">
                    <a class="nav-link nav-link-animated" href="equipos">Inicio</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link nav-link-animated" href="equipos">Equipos</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link nav-link-animated" href="jugadores">Jugadores</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link nav-link-animated" href="logout">Cerrar sesión</a>
                </li>

                <?php if (Helpers::esAdmin()) { ?>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-warning btn-sm px-3 fw-bold text-dark rounded-pill shadow-sm" href="formJugador">Agregar jugador</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-warning btn-sm px-3 fw-bold text-dark rounded-pill shadow-sm" href="form_equipo">Agregar equipo</a>
                    </li>
                <?php } ?>

                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a class="btn btn-warning btn-sm px-3 fw-bold text-dark rounded-pill shadow-sm" href="registro">Registro</a>
                </li>
                <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                    <a class="btn btn-outline-warning btn-sm px-3 fw-bold rounded-pill" href="login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="page-content">

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    <title>Pagina futbol</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow fixed-top py-2">
  <div class="container py-1">
    <!-- Logotipo o Nombre del Sitio -->
    <a class="navbar-brand fw-bold text-uppercase d-flex align-items-center fs-4" href="equipos">
      <i class="bi bi-trophy-fill me-2 text-warning"></i>
      Fútbol<span class="text-warning">App</span>
    </a>

    <!-- Botón para pantallas móviles -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Contenedor de los enlaces -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item px-3">
          <a class="nav-link nav-link-animated active fw-semibold" aria-current="page" href="equipos">
            Inicio
          </a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link nav-link-animated" href="equipos">
            Equipos
          </a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link nav-link-animated" href="jugadores">
            Jugadores
          </a>
        </li>
        <!-- Botón de acción destacado -->
        <li class="nav-item ms-lg-4 mt-2 mt-lg-0">
          <a class="btn btn-warning btn-sm px-4 fw-bold text-dark rounded-pill shadow-sm" href="form_equipo">
            Agregar Equipo
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="conteiner">


<?php

class ViewEquipos
{

    function showEquipos($equipos)
    {
        include "templates/header.php";
        foreach ($equipos as $equipo) { ?>
            <a href="jugadores_equipo/<?= $equipo->id_equipo ?>">
                <div class="equipos">
                    <div class="card-equipo">
                        <img style="width: 330px; " src="<?= $equipo->imagen ?>" class="card-img-top" alt="...">
                    </div>
                </div>
            </a>
        <?php
        }
        ?>
    <?php
        include "templates/footer.php";
    }

    function showEquipo($equipo)
    {
        include "templates/header.php";

    ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $equipo->nombre ?></h5>
                <img src="<?= $equipo->imagen ?>" class="card-img-top" alt="...">
                <p class="card-text"><?= $equipo->fundacion ?></p>
                <p class="card-text"><?= $equipo->pais ?></p>
                <a href="equipos" class="btn btn-primary">Volver</a>
                <a href="jugadores_equipo/<?= $equipo->id_equipo ?>" class="btn btn-danger">ver jugadores</a>
                <a href="borrar/<?= $equipo->id_equipo ?>" class="btn btn-danger">Borrar</a>

            </div>
        </div>

    <?php
        include "templates/footer.php";
    }



    function showForm($err = null)
    {
        include "templates/header.php";

    ?>

       <div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      
      <!-- Tarjeta moderna para el formulario -->
      <div class="card bg-dark text-light shadow-lg border border-secondary rounded-4">
        
        <!-- Encabezado de la tarjeta -->
        <div class="card-header border-bottom border-secondary text-center py-4">
          <h3 class="fw-bold mb-0 text-uppercase tracking-wide text-warning">
            <i class="bi bi-shield-plus me-2"></i>Registrar Equipo
          </h3>
          <p class="text-muted small mb-0 mt-1">Ingresa los datos correspondientes para dar de alta al club</p>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body p-4">
          <form action="datosForm" method="POST" enctype="multipart/form-data">
            
            <!-- Campo: Nombre -->
            <div class="mb-4">
              <label class="form-label fw-semibold text-warning small">Nombre del equipo</label>
              <div class="input-group">
                <span class="input-group-text bg-secondary border-secondary text-light"><i class="bi bi-fonts"></i></span>
                <input type="text" class="form-control bg-dark border-secondary text-light" name="nombre" placeholder="Ej. Real Madrid" required>
              </div>
            </div>

            <!-- Fila de dos columnas: País y Fundación -->
            <div class="row mb-4">
              <!-- Campo: País -->
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label class="form-label fw-semibold text-warning small">País</label>
                <div class="input-group">
                  <span class="input-group-text bg-secondary border-secondary text-light"><i class="bi bi-geo-alt-fill"></i></span>
                  <input type="text" class="form-control bg-dark border-secondary text-light" name="pais" placeholder="Ej. España" required>
                </div>
              </div>
              
              <!-- Campo: Fundación -->
              <div class="col-sm-6">
                <label class="form-label fw-semibold text-warning small">Fundación</label>
                <div class="input-group">
                  <span class="input-group-text bg-secondary border-secondary text-light"><i class="bi bi-calendar-event"></i></span>
                  <input type="text" class="form-control bg-dark border-secondary text-light" name="fundacion" placeholder="Ej. 1902" required>
                </div>
              </div>
            </div>

            <!-- Campo: Imagen / Escudo -->
            <div class="mb-4">
              <label class="form-label fw-semibold text-warning small">Imagen / Escudo del club</label>
              <input type="file" class="form-control bg-dark border-secondary text-light" name="imagen" required>
              <div class="form-text text-muted small">Formatos permitidos: PNG, JPG (Se recomienda fondo transparente).</div>
            </div>

            <!-- Botones de Acción -->
            <div class="d-grid gap-2 mt-5">
              <button type="submit" class="btn btn-warning btn-lg fw-bold text-dark rounded-pill shadow-sm">
                <i class="bi bi-check-circle-fill me-2"></i>Guardar Equipo
              </button>
              <a href="equipos" class="btn btn-outline-secondary btn-sm text-light rounded-pill mt-1">
                Cancelar
              </a>
            </div>

          </form>
        </div>

      </div>

    </div>
  </div>
</div>


<?php
        if ($err) {
            echo "<h1>" . $err . "</h1>";
        }
        include "templates/footer.php";
    }
}

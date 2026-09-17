<?php

class ViewEquipos
{

    function showEquipos($equipos)
    {
        include "templates/header.php";
        foreach ($equipos as $equipo) { ?>

            <div class="col" style="display: flex; justify-content:space-around; flex-direction:row; width: 350px; "  >
                <div class="card" style="width: 30rem; margin-top: 2rem">
                    <div class="card-body">
                        <h5 class="card-title"><?= $equipo->nombre ?></h5>
                        <img style="width: 330px; " src="<?= $equipo->imagen?>" class="card-img-top" alt="...">
                        <a href="jugadores_equipo/<?= $equipo->id_equipo ?>" class="btn btn-primary">ver jugadores</a>
                        <a href="equipo/<?= $equipo->id_equipo ?>" class="btn btn-danger">ver detalle</a>
                        <a href="borrar/<?= $equipo->id_equipo ?>" class="btn btn-danger">Borrar</a>

                    </div>
                </div>
            </div>
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
              
            </div>
        </div>

    <?php
        include "templates/footer.php";
    }



    function showForm($err = null)
    {
        include "templates/header.php";
        include "templates/footer.php";
    ?>

        <form action="datosForm" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre del equipo</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">Pais</label>
                <input type="text" class="form-control" name="pais">
            </div>
            <div class="mb-3">
                <label class="form-label">Fundacion</label>
                <input type="text" class="form-control" name="fundacion">
            </div>
            <div class="mb-3 form-check">
                <label class="form-label">Imagen/escudo</label>
                <input type="text" class="form-control" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



<?php
        if ($err) {
        }
    }
}

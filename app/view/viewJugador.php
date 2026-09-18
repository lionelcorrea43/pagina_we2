<?php


class viewJugador
{


    function showJugadores($jugadores)
    {

        include "templates/header.php";
        foreach ($jugadores as $jugador) { ?>

            <div class="col" style="display: flex; justify-content:space-around; flex-direction:row; width: 350px; ">
                <div class="card" style="width: 30rem; margin-top: 2rem">
                    <div class="card-body">
                        <h5 class="card-title"><?= $jugador->nombre ?> <?= $jugador->apellido ?></h5>
                        <h5 class="card-title"><?= $jugador->fecha_nacimieto ?></h5>
                        <h5 class="card-title"><?= $jugador->posicion ?></h5>
                        <img style="width: 330px; " src="<?= $jugador->IMAGEN ?>" class="card-img-top" alt="...">
                        <a href="equipo/<?= $jugador->id_equipo ?>" class="btn btn-primary">Ver club</a>
                        <a href="equipos" class="btn btn-primary">Volver</a>

                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    <?php
        include "templates/footer.php";
    }


}

<?php


class viewJugador
{

    function showJugadores($jugadores)
    {
        include "templates/header.php"; ?>
        
        <!-- Contenedor principal que agrupa las tarjetas de forma responsiva -->
        <div class="container my-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

                <?php foreach ($jugadores as $jugador) { ?>
                    <div class="col">
                        <!-- Tarjeta con el color exacto de tu navbar (#1c1c1c), bordes redondeados y sombra suave -->
                        <div class="card h-100 shadow-sm text-white border-0 custom-card-hover" style="background-color: #1c1c1c; border-radius: 12px; overflow: hidden;">
                            
                            <!-- Imagen adaptada con proporciones cuidadas -->
                            <img style="height: 320px; object-fit: cover; object-position: top;" 
                                 src="<?= $jugador->IMAGEN ?>" 
                                 class="card-img-top" 
                                 alt="<?= $jugador->nombre ?>">
                            
                            <!-- Cuerpo de la tarjeta -->
                            <div class="card-body d-flex flex-column p-4">
                                <!-- Nombre del jugador destacado con el amarillo/dorado de tus botones (#ffc107) -->
                                <h4 class="card-title fw-bold mb-1" style="color: #ffc107;">
                                    <?= $jugador->nombre ?> <?= $jugador->apellido ?>
                                </h4>
                                
                                <!-- Posición con estilo secundario -->
                                <p class="text-uppercase small opacity-75 fw-semibold mb-3" style="letter-spacing: 1px;">
                                    <?= $jugador->posicion ?>
                                </p>
                                
                                <!-- Fecha de nacimiento formateada discretamente -->
                                <p class="card-text small opacity-50 mt-auto mb-4">
                                    Nació el: <?= $jugador->fecha_nacimieto ?>
                                </p>
                                
                                <!-- Botones de acción modernos en la parte inferior -->
                                <div class="d-flex justify-content-between gap-2">
                                    <a href="equipo/<?= $jugador->id_equipo ?>" class="btn btn-sm px-4 fw-bold" style="background-color: #ffc107; color: #1c1c1c; border-radius: 6px;">
                                        Ver club
                                    </a>
                                    <a href="equipos" class="btn btn-sm px-4 border-secondary text-white" style="background-color: transparent; border-radius: 6px;">
                                        Volver
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>

        <?php include "templates/footer.php";
    }


}
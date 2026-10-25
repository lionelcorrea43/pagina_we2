<?php
require_once "app/view/View.php";
class viewJugador extends View
{


    function showJugadores($jugadores)
    {

        include "templates/cardJugadores.phtml";
    }
    function showFormJugador($jugador = null,$err = null)
    {
        include "templates/formJugador.phtml";
    }

}

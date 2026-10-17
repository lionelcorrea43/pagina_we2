<?php


class viewJugador
{


    function showJugadores($jugadores)
    {

        include "templates/cardJugadores.phtml";
    }
    function showFormJugador($err = null)
    {
        include "templates/formJugador.phtml";
    }

}

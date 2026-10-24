<?php

class ViewEquipos
{

    function showEquipos($equipos)
    {
        include "templates/cardEquipos.phtml";
    }

    function showEquipo($equipo)
    {
        include "templates/cardEquipo.phtml";
    }



    function showFormEquipo( $equipo = null,$err = null)
    {
        include "templates/form.phtml";
    }
}

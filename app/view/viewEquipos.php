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



    function showFormEquipo($err = null)
    {
        include "templates/form.phtml";
    }
}

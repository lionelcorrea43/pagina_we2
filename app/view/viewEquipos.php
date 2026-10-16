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



    function showForm($err = null)
    {
        
        include "templates/form.phtml";
    }
}

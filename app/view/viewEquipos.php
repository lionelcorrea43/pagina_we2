<?php
require_once "app/view/View.php";

class ViewEquipos extends View
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

<?php
require_once "app/view/View.php";
class viewUsuarios extends View
{

    function showFormLogin($err = null)
    {
        include "templates/formLogin.phtml";
    }

    function registroForm()
    {
      include "templates/formRegistro.phtml" ;
    }

    function showPerfil($email, $rol)
    {
        include "templates/perfil.phtml";
    }
}

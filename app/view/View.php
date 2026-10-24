<?php
require_once "helpers/Helpers.php";
class View{

    private $nombreApp;
    private $existe;

    function __construct(){
        $this->nombreApp = $this->getNombreApp();
        $this->existe = $this->verificarUsuario();
    }

    function getNombreApp(){
        return "Futbol App";
    }

    function verificarUsuario(){
        return Helpers::existeUsuario();
    }




}
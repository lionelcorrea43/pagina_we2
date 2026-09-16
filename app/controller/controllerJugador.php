<?php

require_once('app/model/modelJugadores.php');
require_once('app/view/viewJugador.php');

class controllerJugador{

private $model;
private $view;

function __construct()
{
    $this->model=new modelJugadores;
    $this->view=new viewJugador;
}


function getJugadores(){
    $jugadores=$this->model->all();
    $this->view->showJugadores($jugadores);
}

    function getJugadorByEquipo($equipo){
   
    $jugadores = $this->model->findById($equipo);//trae todos los jugadores q tengan el mismo id, ejemplo id =1 trae a 5 jugadores
    $this->view->showJugadores($jugadores);

}

}
<?php

require_once('app/model/modelEquipos.php');
require_once('app/view/viewEquipos.php');

class controllerEquipos
{
    private $model;
    private $view;


    function __construct()
    {
        $this->model = new modelEquipos;
        $this->view = new ViewEquipos;
    }


    function getEquipos()
    {
        $equipos = $this->model->all();
        $this->view->showEquipos($equipos);
    }
    function getEquipoById($id)
    {

        $equipo = $this->model->findById($id);
        $this->view->showEquipo($equipo);
    }

    function mostrarFormulario()
    {

        $this->view->showForm();
    }


    function obtenerDatos()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($_POST['nombre']) && !empty($_POST['pais']) && !empty($_POST['fundacion']) && !empty($_POST['imagen'])) {
                $nombre = $_POST['nombre'];
                $pais = $_POST['pais'];
                $fundacion = $_POST['fundacion'];
                $imagen = $_POST['imagen'];


                $this->model->save($nombre, $fundacion, $pais, $imagen);
                header("Location:" . BASE_URL . "/equipos");
            } else {
                $this->view->showForm("Faltan datos obligatorios");
            }
        }
    }


    function eliminarEquipo($id)
    {
        $this->model->delete($id);
        header("Location:" . BASE_URL . "/equipos");
    }
}

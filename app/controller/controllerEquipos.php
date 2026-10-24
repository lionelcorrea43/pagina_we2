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
        if (Helpers::barreraSeguridad()) {
            $equipos = $this->model->all();
            $this->view->showEquipos($equipos);
        }
    }
    function getEquipoById($id)
    {
        $equipo = $this->model->findEquipoById($id);
        $this->view->showEquipo($equipo);
    }

    function mostrarFormularioEquipo()
    {
        if (Helpers::barreraSeguridad()) {
            $this->view->showFormEquipo(null, null);
        }
    }
    function editarFormulario($id)
    {
        $equipo = $this->model->findEquipoById($id);
        $this->view->showFormEquipo($equipo);
    }


    function obtenerDatosEquipo()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($_POST['nombre']) && !empty($_POST['pais']) && !empty($_POST['fundacion'])) {
                $id_equipo = isset($_POST['id_equipo']) ? $_POST['id_equipo'] : null;
                $nombre = $_POST['nombre'];
                $pais = $_POST['pais'];
                $fundacion = $_POST['fundacion'];
                $nombreFinalImg = null;
                if (!empty($_FILES['imagen']['name'])) {
                    $imagen = $_FILES['imagen']['name'];
                    //creamos un archivo temporal
                    $archivoTemporal = $_FILES['imagen']['tmp_name'];

                    $nombreFinalImg = "imagen/" . uniqid("", true) . "." . strtolower(pathinfo($imagen, PATHINFO_EXTENSION));

                    move_uploaded_file($archivoTemporal, $nombreFinalImg);
                }


                if ($id_equipo && $nombreFinalImg != null) {
                    $this->model->updateEquipo($id_equipo, $nombre, $fundacion, $pais, $nombreFinalImg);
                }   else if ($id_equipo && $nombreFinalImg == null) {
                    $equipo = $this->model->findEquipoById($id_equipo);
                    $this->model->updateEquipo($id_equipo, $nombre, $fundacion, $pais, $equipo->imagen);
                    header("Location: " . BASE_URL . "equipos");
                } else {
                
                    $this->model->saveEquipo($nombre, $fundacion, $pais, $nombreFinalImg);
                    header("Location: " . BASE_URL . "equipos");
                }
                $this->view->showFormEquipo("Faltan datos obligatorios");
            }
        }
    }


    function eliminarEquipo($id)
    {
        $this->model->deleteEquipo($id);
        header("Location:" . BASE_URL . "equipos");
    }
}

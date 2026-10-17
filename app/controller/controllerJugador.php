<?php

require_once('app/model/modelJugadores.php');
require_once('app/view/viewJugador.php');

class controllerJugador
{

    private $model;
    private $view;

    function __construct()
    {
        $this->model = new modelJugadores;
        $this->view = new viewJugador;
    }

    function mostrarFormularioJugador()
    {

        $this->view->showFormJugador();
    }

    function obtenerDatosJugador()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($_POST['id_equipo']) && !empty($_POST['fecha_nacimiento']) && !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['sueldo'])) {
                $posicion = $_POST['posicion'];    
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $sueldo = $_POST['sueldo'];
                $equipo = $_POST['id_equipo'];
                $nombreFinalImg = null;
                if (!empty($_FILES['imagen']['name'])) {
                    $imagen = $_FILES['imagen']['name'];
                    //creamos un archivo temporal
                    $archivoTemporal = $_FILES['imagen']['tmp_name'];

                    $nombreFinalImg = "imagen/" . uniqid("", true) . "." . strtolower(pathinfo($imagen, PATHINFO_EXTENSION));

                    move_uploaded_file($archivoTemporal, $nombreFinalImg);
                }



                $this->model->saveJugador($equipo, $fecha_nacimiento, $nombre, $apellido, $sueldo, $posicion, $nombreFinalImg);
                header("Location:" . BASE_URL . "jugadores");
            } else {
                $this->view->showFormJugador("Faltan datos obligatorios");
            }
        }
    }


    function getJugadores()
    {
        if (Helpers::barreraSeguridad()) {
            $jugadores = $this->model->all();
            $this->view->showJugadores($jugadores);
        } }

    function showJugadoresByEquipo($equipo)
    {
    if (Helpers::barreraSeguridad()) {
        $jugadores = $this->model->findJugadorByEquipo($equipo); //trae todos los jugadores q tengan el mismo id, ejemplo id =1 trae a 5 jugadores
        $this->view->showJugadores($jugadores);
    }
    }
    function eliminarJugador($id)
    {
        $this->model->deleteJugador($id);
        header("Location:" . BASE_URL . "equipos");
    }
}

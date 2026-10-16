<?php

require_once('app/controller/controllerEquipos.php');
require_once('app/controller/controllerJugador.php');
require_once('app/controller/controllerUsuarios.php');

$controllerEquip = new controllerEquipos();
$controllerJuga = new controllerJugador();
$controllerUsu = new controllerUsuarios();



define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


$action = $_REQUEST['action'];

if (empty($action)) {
    $action = 'login';
}

$parametros = explode('/', $action);

switch ($parametros[0]) {

    case 'login':
        $controllerUsu->mostrarLogin();
        break;
    case 'registro':
        $controllerUsu->mostrarRegistro();
        break;
    case 'datosRegistro':
        $controllerUsu->obtenerDatosRegistro();
        break;
    case 'datosLogin':
        $controllerUsu->obtenerDatosLogin();
        break;
    case 'logout':
        $controllerUsu->cerrarSesion();
        break;


    case 'equipos':
        $controllerEquip->getEquipos();
        break;
    case 'equipo':
        if (Helpers::barreraSeguridad()) {
            $controllerEquip->getEquipoById($parametros[1]);
        }
        break;
    case 'form_equipo':
        $controllerEquip->mostrarFormulario();
        break;
    case 'jugadores':
        $controllerJuga->getJugadores();
        break;
    case 'jugadores_equipo':
        $controllerJuga->getJugadorByEquipo($parametros[1]);
        break;
    case 'datosForm':
        $controllerEquip->obtenerDatos();
        break;
    case 'borrar':
        $controllerEquip->eliminarEquipo($parametros[1]);
        break;
}

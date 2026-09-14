<?php

require_once('app/controller/controllerEquipos.php');
require_once('app/controller/controllerJugador.php');

$controllerEquip = new controllerEquipos();
$controllerJuga = new controllerJugador();



define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


$action = $_REQUEST['action'];

if (empty($action)) {
    $action = 'equipos';
}

$parametros = explode('/', $action);

switch ($parametros[0]) {
    case 'equipos':
        $controllerEquip->getEquipos();
        break;
    case 'equipo':
        $controllerEquip->getEquipoById($parametros[1]);
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
        case 'datosForm': $controllerEquip->obtenerDatos() ; break;
        case 'borrar': $controllerEquip->eliminarEquipo($parametros[1]) ; break;
}

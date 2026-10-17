<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once('app/model/modelUsuarios.php');
require_once('app/view/viewUsuarios.php');

class controllerUsuarios
{
    private $model;
    private $view;

    function __construct()
    {
        $this->view = new viewUsuarios;
        $this->model = new modelUsuarios;
    }

    function mostrarRegistro()
    {
        $this->view->registroForm();
    }

    function mostrarLogin()
    {
        $this->view->showFormLogin($mensaje = "");
    }



    function obtenerDatosRegistro()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $userEmail = $_POST['email'];
                $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);


                $this->model->registro($userEmail, $userPassword);
                header("Location:" . BASE_URL . "/login");
            }
        }
    }


    function obtenerDatosLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            //Creo la cuenta cuando venga en el POST
            if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
                $usuario = $_POST['usuario'];
                $password = $_POST['password'];


                $user = $this->model->existeUsuario($usuario);
                   
                if ($user && password_verify($password, $user->password)) {

                    session_start();
                    $_SESSION['ESTA_LOGUEADO'] = true;
                    $_SESSION['USUARIO'] = $user->email;
                    $_SESSION['ROL'] = $user->role;
                    header("Location:" . BASE_URL . "equipos");
                } else {
                    $this->view->showFormLogin("Credenciales incorrectas");
                }
            } else {
                $this->view->showFormLogin("Faltan datos obligatorios");
            }
        }
    }



    function cerrarSesion()
    {
        session_start();
        session_destroy();
        header("Location:" . BASE_URL . "login");
    }
}

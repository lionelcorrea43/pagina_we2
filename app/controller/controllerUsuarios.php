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
        $this->model = new modelUsuarios;
        $this->view = new viewUsuarios;
    }

    function obtenerDatorRegistro()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $userEmail = $_POST['email'];
                $userPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $role = 'user';
                $this->model->registro($userEmail, $userPassword, $role);
                header("Location:" . BASE_URL . "/login");
            }
        }
    }


    function obtenerDatorLogin()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            //Creo la cuenta cuando venga en el POST
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $userEmail = $_POST['email'];
                $userPassword = $_POST['password'];


                $accesoValido = $this->model->login($userEmail, $userPassword);

                if ($accesoValido) {
                    // Llamamos a la vista pero le pasamos el mensaje de éxito
                    $this->view->loginForm("Acceso exitoso");
                } else {
                    // Llamamos a la vista pasándole el mensaje de error
                    $this->view->loginForm("Acceso incorrecto");
                }
            }
        }
    }



    function mostrarRegistro()
    {
        $this->view->registroForm();
    }

    function mostrarLogin()
    {
        $this->view->loginForm();
    }
}

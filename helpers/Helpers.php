<?php

class helpers
{


    static function barreraSeguridad()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (!isset($_SESSION['ESTA_LOGUEADO'])) {
            header("Location:" . BASE_URL . "login");
            die();
        }
        return true;
    }
    static function estaLogueado()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (isset($_SESSION['ESTA_LOGUEADO'])) {
            return true;
        }
        return false;
    }
    static function existeUsuario()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (isset($_SESSION['USUARIO'])) {
            return true;
        }
        return false;
    }
    static function esAdmin()
    {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
        if (isset($_SESSION['ROL']) &&  ($_SESSION['ROL']) == "administrador") {
            return true;
        }
        return false;
    }
}

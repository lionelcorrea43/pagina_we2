<?php

class helpers{


    static function barreraSeguridad(){
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        if(!isset($_SESSION['ESTA_LOGUEADO'])){
            header("Location:" . BASE_URL . "login");
            die();
        }
        return true;
    }

    static function existeUsuario(){
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
        if(isset($_SESSION['USUARIO'])){
            return true;
        }
        return false;
    }



}
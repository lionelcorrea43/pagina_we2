<?php
require_once('app/model/model.php');
class modelUsuarios extends Model
{


    function registro($userEmail, $userPassword)
    {
        //Guardo el nuevo usuario en la base de datos
        $db = $this->getPDO();
        $query = $db->prepare('INSERT INTO usuarios (email, password) VALUES (? , ?)');
        $query->execute([$userEmail, $userPassword]);
    }


    function existeUsuario($usuario)
    {
        $db =$this->getPDO();
        $sentencia = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $sentencia->execute([$usuario]); // Ejecutamos la consulta

        $usuario = $sentencia->fetch(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $usuario;
    }
}

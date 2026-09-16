<?php
require_once('app/model/model.php');

class modelEquipos extends Model{

function all(){
    $bdd = $this->getPDO(); // Abrimos  una conexion
    $sentencia = $bdd->prepare("SELECT * FROM equipo");
    $sentencia->execute();

    $equipos = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $equipos;

}




 function findById($id)
    {
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM equipo WHERE id_equipo = ?");
        $sentencia->execute([$id]); // Ejecutamos la consulta

        $equipo = $sentencia->fetch(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $equipo;
    }

    function save($nombre, $fundacion, $pais, $imagen)
    {
        $db = $this->getPDO();
        $sentencia = $db->prepare("INSERT INTO equipo (nombre, fundacion, pais, imagen) VALUES (?,?,?,?)");
        $sentencia->execute([$nombre, $fundacion, $pais, $imagen]);
    }

    function delete($id)
    {
        $db = $this->getPDO();
        $sentencia = $db->prepare("DELETE FROM equipo WHERE id_equipo = ?");
        $sentencia->execute([$id]);
    }












}


<?php
require_once('app/model/model.php');


class modelJugadores extends Model{


    function all(){
    $bdd = $this->getPDO(); // Abrimos  una conexion
    $sentencia = $bdd->prepare("SELECT * FROM jugador");
    $sentencia->execute();

    $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $jugadores;

}


    function findById($id){
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM jugador WHERE id_equipo = ?");
        $sentencia->execute([$id]); // Ejecutamos la consulta

        $jugador = $sentencia->fetchAll(PDO::FETCH_OBJ); // uso fetch all para traer todos los jugadores con el mismo id sino traeria solo el primero
        return $jugador;
    
    }
}

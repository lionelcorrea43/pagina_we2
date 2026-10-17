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

    function getEquipoByJugador($id){
    $bdd = $this->getPDO(); // Abrimos  una conexion
    $sentencia = $bdd->prepare("SELECT id_equipo FROM jugador where id_jugador = ?");
    $sentencia->execute([$id]);

    $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $jugadores;
}
    function saveJugador( $equipo, $fecha_nacimiento, $nombre, $apellido, $sueldo, $posicion, $imagen)
    {
        $db = $this->getPDO();
        $sentencia = $db->prepare("INSERT INTO jugador (id_equipo, fecha_nacimiento, nombre, apellido, sueldo, posicion, imagen) VALUES (?,?,?,?,?,?,?)");
        $sentencia->execute([$equipo, $fecha_nacimiento, $nombre, $apellido, $sueldo, $posicion, $imagen]);
    }


    function findJugadorByEquipo($id){
        $db = $this->getPDO(); // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM jugador WHERE id_equipo = ?");
        $sentencia->execute([$id]); // Ejecutamos la consulta

        $jugador = $sentencia->fetchAll(PDO::FETCH_OBJ); // uso fetch all para traer todos los jugadores con el mismo id sino traeria solo el primero
        return $jugador;
    }
    
    function deleteJugador($id)
    {

        $db = $this->getPDO();
        $sentencia = $db->prepare("DELETE FROM jugador WHERE id_jugador = ?");
        $sentencia->execute([$id]);
        
    }
}

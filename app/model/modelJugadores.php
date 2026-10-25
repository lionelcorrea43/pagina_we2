<?php
require_once('app/model/model.php');


class modelJugadores extends Model{


    function all(){
    $bdd = $this->db; // Abrimos  una conexion
    $sentencia = $bdd->prepare("SELECT * FROM jugador");
    $sentencia->execute();

    $jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $jugadores;
}

    function findJugadorById($id){
        $db = $this->db; // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM jugador WHERE id_jugador = ?");
        $sentencia->execute([$id]); // Ejecutamos la consulta

        $jugador = $sentencia->fetch(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $jugador;
    }

    function getEquipoByJugador($id){
    $bdd = $this->db; // Abrimos  una conexion
    $sentencia = $bdd->prepare("SELECT id_equipo FROM jugador where id_jugador = ?");
    $sentencia->execute([$id]);

    $equipo = $sentencia->fetchAll(PDO::FETCH_OBJ); // Obtenemos los datos (para generar el HTML)
        return $equipo;
}
    function saveJugador( $equipo, $fecha_nacimiento, $nombre, $apellido, $sueldo, $posicion, $imagen)
    {
        $db = $this->db;
        $sentencia = $db->prepare("INSERT INTO jugador (id_equipo, fecha_nacimiento, nombre, apellido, sueldo, posicion, imagen) VALUES (?,?,?,?,?,?,?)");
        $sentencia->execute([$equipo, $fecha_nacimiento, $nombre, $apellido, $sueldo, $posicion, $imagen]);
    }

    function updateJugador($equipo, $fecha_nacimiento, $nombre, $apellido, $sueldo,$posicion, $imagen, $jugador)
    {
        $db = $this->db;
        $sentencia = $db->prepare("UPDATE jugador SET id_equipo = ?, fecha_nacimiento = ?, nombre = ?, apellido = ?, sueldo = ?, posicion = ?, imagen = ? WHERE id_jugador = ?");
        $sentencia->execute([$equipo, $fecha_nacimiento, $nombre, $apellido, $sueldo, $posicion, $imagen, $jugador->id_jugador]);
    }

    function findJugadorByEquipo($id){
        $db = $this->db; // Abrimos  una conexión

        $sentencia = $db->prepare("SELECT * FROM jugador WHERE id_equipo = ?");
        $sentencia->execute([$id]); // Ejecutamos la consulta

        $jugador = $sentencia->fetchAll(PDO::FETCH_OBJ); // uso fetch all para traer todos los jugadores con el mismo id sino traeria solo el primero
        return $jugador;
    }
    
    function deleteJugador($id)
    {

        $db = $this->db;
        $sentencia = $db->prepare("DELETE FROM jugador WHERE id_jugador = ?");
        $sentencia->execute([$id]);
        
    }
}

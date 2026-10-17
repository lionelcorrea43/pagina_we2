<?php

class modelUsuarios
{


    function registro($userEmail, $userPassword, $role)
    {
        //Guardo el nuevo usuario en la base de datos
        $db = new PDO('mysql:host=localhost;' . 'dbname=equipo_jugadores;charset=utf8', 'root', '');
        $query = $db->prepare('INSERT INTO usuarios (email, password, role) VALUES (? , ?, ?)');
        $query->execute([$userEmail, $userPassword, $role]);
    }

    function login($userEmail, $userPassword)
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=equipo_jugadores;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$userEmail]);
        $user = $query->fetch(PDO::FETCH_OBJ);

        //Si el usuario existe y las contraseñas coinciden
        if ($user && password_verify($userPassword, $user->password)) {
            return true; // 🔥 Retornamos éxito al controlador
        } else {
            return false; // 🔥 Retornamos fallo al controlador
        }
    }
}

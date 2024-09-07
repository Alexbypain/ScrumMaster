<?php

class Conexion {

    public static function conectar() {
        $conexion = new mysqli("sql110.infinityfree.com", "if0_37112482", "Hr3EEKwlrAhkT", "if0_37112482_XXX");
        if(!$conexion) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        return $conexion;
    }

}

?>
<?php
require("config_bd.php");

class Conexion {
    public static function con() {
        $conex = mysqli_connect(DB_HOST, DB_USUARIO, DB_PASSWORD,DB_NOMBRE);

        // if(!$conex) {
        //     echo "Conexión no realizada. Error: " . 
        //             mysqli_connect_error();    
            
                           
        // } else {
        //     echo "Conexión realizada con la base de datos " 
        //             . DB_NOMBRE;
                    
        // }
        return $conex;
    }
}

Conexion::con();
?>
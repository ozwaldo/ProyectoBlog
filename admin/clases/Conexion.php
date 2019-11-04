<?php
require("dbconfig.php");

class Conexion {
    public static function con($bd) {
        //Establecemos la conexion con el servidor de Mysql
        $conex = mysqli_connect('localhost', 'root', 'rootroot');
        //Indicar que vamos a utilizar la codificacion utf8
        mysqli_query($conex,"SET NAMES 'utf8'");
        //Seleccionar la base de datos a utilizar
        mysqli_select_db($conex,$bd);
        return $conex;
    }
}

?>
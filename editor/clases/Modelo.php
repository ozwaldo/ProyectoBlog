<?php

include 'Conexion.php';
include 'RegistrosMysql.php';

class Modelo {

    public function seleccionar($campos, $tabla, $where='', $orderby='', $limit='') {
        if ($where != '') {
            $where = " WHERE $where";
        }
        if ($orderby != '') {
            $orderby = " ORDER BY $orderby";
        }
        if ($limit != '') {
            $limit = " LIMIT $limit";
        }
        $sql = "SELECT $campos FROM $tabla" . $where . $orderby . $limit;
        //echo $sql;
        $registros = mysqli_query(Conexion::con(),$sql);

        if (!$registros) {
            return "EROR DE CONSULTA";
        } else {
            $registros = new RegistrosMysql($registros);
        }
        return $registros;
    }

    public function registrar($tabla, $campos, $where='') {
        if ($where != '') {
            $where = "where $where";
        }
        $sql = "INSERT INTO $tabla SET $campos" . $where;
        //echo $sql;
        $res = mysql_query($sql, Conexion::con());
        if ($res) {
            return true;
        }
        return false;
    }

    public function modificar($tabla, $campos, $where='') {
        if ($where != '') {
            $where = "where $where";
        }
        $sql = "UPDATE $tabla SET $campos" . $where;
        //echo "where: ". $where;
        //echo $sql;
        $res = mysqli_query(Conexion::con(),$sql);
        if ($res) {
            return true;
        }
        return false;
    }

    public function eliminar($tabla, $where) {
        $sql = "DELETE FROM $tabla WHERE $where";
        //echo $sql;
        $res = mysqli_query(Conexion::con(),$sql);

        if ($res) {
            return true;
        }
        return false;
    }

}

?>

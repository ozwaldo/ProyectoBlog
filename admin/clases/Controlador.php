<?php

require_once 'Modelo.php';

class Controlador {

    var $mysql;

    public function __construct() {
        $this->mysql = new Modelo();
    }

    //Agregar como parametros $campos, $tabla, $where='' ...

    public function get_rows($campos, $tabla, $where='', $orderby='', $limit='') {
        
        $reg = $this->mysql->seleccionar($campos, $tabla, $where, $orderby, $limit);
        
        return $reg;
    }

    public function get_row_id($idTabla, $tabla, $id) {
        $reg = $this->mysql->seleccionar('*', $tabla, "$idTabla=$id");
        return $reg;
    }

    public function campos($post, $separador=' ') {
        $i = 0;
        $camp = '';
        foreach ($post as $key => $value) {
            $value = mysqli_real_escape_string(Conexion::con('db_diplomado'),$value);
            if ($i == 0) {
                $camp .= "$key = '$value'";
            } else {
                $camp .= $separador . "$key='$value'";
            }
            $i++;
        }
        return $camp;
    }

    public function registrar($tabla, $post) {
        $campo = $this->campos($post, ', ');
        if ($this->mysql->registrar($tabla, $campo)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function modificar($tabla, $idTabla, $post) {
        $campo = $this->campos($post, ', ');
        //echo "id: " . $idTabla ."\n";
        //print_r($post); echo "\n";
        $id = $post["$idTabla"];
        //echo "id: " . $id ."\n";
        if ($this->mysql->modificar($tabla, $campo, "$idTabla='$id'")) {
            return true;
        } else {
            return FALSE;
        }
    }

    public function eliminar($tabla, $idTabla, $id) {
        if ($this->mysql->eliminar($tabla, "$idTabla=$id")) {
            return TRUE;
        } else {
            return false;
        }
    }

}

$control = new Controlador();
?>

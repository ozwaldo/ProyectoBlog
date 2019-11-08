<?php

include 'Controlador.php';

class Login {

    public function verificarUsuario() {
        if (!isset($_SESSION['usuario_editor'])|| $_SESSION['tipo'] != "0") {            
            return "error";
        }
    }

    public function ingresar() {
        $usuario_editor = $_POST['usuario'];
        $pass = $_POST['password'];
        

        $control = new Controlador();
        $row = $control->get_rows('id_usuario, nombre, tipo', 'usuarios', "email= '$usuario_editor' AND password = '$pass'");
        //print_r($row);
        if ($rows = $row->getSiguienteRegistro()) {
            //print_r($rows);
            
            $_SESSION['tipo'] = $rows['tipo'];
            
            //$post['adm_Last_Login'] = date('Y/m/j G:i:s');

            
            if ($_SESSION['tipo'] == "1") {

                $_SESSION['editor_clave'] = $rows['id_usuario'];
                $_SESSION['nombre'] = $rows['nombre'];
                $post['editor_clave'] = $rows['id_usuario'];
                $_SESSION['usuario_editor'] = $_POST['usuario'];
                $_SESSION['ingreso'] = time();

                header("Location: index.php");
            } else {
                return "error";
            }                        
        } else {
            return "error";
        }
    }

    /*function armarOpcionesCategoria($catId=0) {
        $control = new Controlador();
        $sql = $control->get_rows('idCategoria,nombre', 'categoria');
        $var = '';

        while ($row = $sql->getSiguienteRegistro()) {
            $var .= "<option value={$row['idCategoria']}";
            if ($row['idCategoria'] == $catId) {
                $var .= " selected";
            }
            $var .= ">{$row['nombre']}</option></br>";
        }
        return $var;
    }*/

}

?>

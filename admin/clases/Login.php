<?php

include 'Controlador.php';

class Login {

    public function verificarUsuario() {
        if (!isset($_SESSION['usuario_Admin'])) {
            //echo WEB_ROOT;
            header('Location: login.php');
            exit();
        }
    }

    public function ingresar() {
        $usuario_Admin = $_POST['usuario'];
        $pass = $_POST['password'];

        $control = new Controlador();
        $row = $control->get_rows('id_usuario', 'usuarios', "email= '$usuario_Admin' AND password = '$pass'");
        //print_r($row);
        if ($rows = $row->getSiguienteRegistro()) {
            //echo $rows['adm_Clave'];
            $_SESSION['adm_Clave'] = $rows['adm_Clave'];
            $post['adm_Clave'] = $rows['adm_Clave'];
            $post['adm_Last_Login'] = date('Y/m/j G:i:s');

            $_SESSION['usuario_admin'] = $_POST['usuario'];
            $_SESSION['ingreso'] = time();

            header("Location: index.php");

        } else {
            echo "Error: Usuario o contraseña incorrectos";
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

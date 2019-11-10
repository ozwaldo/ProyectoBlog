<?php

    
    require_once '../clases/Controlador.php';
    
    
    if (isset($_GET['id_usuario']) && $_GET['id_usuario'] != '') {
        $id_usuario = "'".$_GET['id_usuario']."'";
        $control = new Controlador();
        if ($control->eliminar('usuarios', 'id_usuario', $id_usuario)) {        
            header("Location: lista_usuarios.php");
        } else {
            echo "Error al Eliminar al alumno";
        }
    }
?>
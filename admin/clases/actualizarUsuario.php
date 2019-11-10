<?php

    require_once '../clases/Controlador.php';
    $control = new Controlador();
    //Guardamos los datos del articullo en un arreglo llamado $post para 
    //poder realizar la actualizacion
    $usuario['id_usuario'] = $_POST['id_usuario'];
    $usuario['nombre'] = $_POST['nombre'];
    $usuario['a_paterno'] = $_POST['a_paterno'];
    $usuario['a_materno'] = $_POST['a_materno'];
    $usuario['email'] = $_POST['email'];
    
    $usuario['informacion'] = $_POST['informacion'];
    
    $tipo = $_POST['tipo'] == "editor" ? 1 : 0;
    $estado = $_POST['estado'] == "on" ? 1 : 0;

    $usuario['tipo'] = $tipo;
    $usuario['estado'] = $estado;

    //Modificamos el articulo con los datos introducidos por el usuario
    if ($result = $control->modificar('usuarios', 'id_usuario', $usuario)) {    
        header("Location: ../usuarios/lista_usuarios.php");
    } else {
        echo "Error";
    }
?>
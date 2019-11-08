<?php

require_once 'Controlador.php';

$control = new Controlador();

$usuario['nombre'] = $_POST['nombre'];
$usuario['a_paterno'] = $_POST['apaterno'];
$usuario['a_materno'] = $_POST['amaterno'];
$usuario['email'] = $_POST['email'];

$password = $_POST['password'];

$password = password_hash($password, PASSWORD_BCRYPT);

$usuario['password'] = $password;
$usuario['informacion'] = $_POST['informacion'];

$tipo = $_POST['tipo'] == "editor" ? 1 : 0;
$estado = $_POST['estado'] == "on" ? 1 : 0;

$usuario['tipo'] = $tipo;
$usuario['estado'] = $estado;


if ($control->registrar('usuarios', $usuario)) {
    header("Location: ../usuarios/lista_usuarios.php");
    
}
echo 'Error al registrar el alumno';
exit;
?>

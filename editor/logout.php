<?php

session_start();
unset($_SESSION['usuario_editor']);
$_SESSION == array();
session_destroy();
header('Location: login.php');
?>

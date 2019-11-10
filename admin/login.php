<?php
session_start();
require_once 'clases/Login.php';
if (isset($_SESSION['usuario_admin'])) {
    header('Location: index.php');
}
ob_start();
?>
<!-- ---- Include the above in your HEAD tag -------- -->



<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="../css/all.css">

    <!--Custom styles-->
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="login">
    <div class="container login-form">
        <div class="d-flex justify-content-center h-100">
            <div class="card card-login">
                <div class="card-header text-center">
                    <h3>Blog</h3>
                </div>
                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $login = new Login();
                        echo "login";
                        $mensaje = $login->
                                ingresar();
                    }
                ?>
                <div class="card-body">
                    <form action="login.php" method="post"> 
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="usuario" placeholder="usuario">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="contraseña">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Entrar" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
                <div class="alert alert-danger" role="alert" <?php  if (isset($mensaje)) { echo "hidden"; }   ?>hidden>Email o Contraseña incorrectos</div>
            </div>
        </div>
    </div>
</body>

</html>
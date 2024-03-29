<?php 
    session_start();
    require('clases/Login.php');
    DEFINE("ADMINISTRADOR","active");
    if(!isset($_SESSION['usuario_admin']) || $_SESSION['tipo'] != "0") {
        header('Location: login.php');
    }
    
    include "template-admin/header.php";
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Bienvenido <?php echo (string)$_SESSION['nombre'] ?></h1>                     
        </div>
        <div>
            <h5>Hora de ingreso: <?php echo date('g:i:s a', $_SESSION['ingreso']) ?></h5>
        </div>
    </main>

</body>

</html>
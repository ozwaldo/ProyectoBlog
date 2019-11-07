<?php 
    

    $_SERVER['DOCUMENT_ROOT'] = "/proyectoblog/";
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>admin/css/estiloadmin.css">

    <title>Administrador</title>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-light flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-primary" href="#">Blog</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?php if(defined('ADMINISTRADOR')){ echo ADMINISTRADOR; } ?>" href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>admin/index.php">
                                <span data-feather="home"></span>
                                Administrador <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(defined('USUARIOS')){ echo USUARIOS; } ?>" href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>admin/usuarios/lista_usuarios.php">
                                <span data-feather="file"></span>
                                Usuarios <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if(defined('POSTS')){ echo POSTS; } ?>" href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>admin/posts/lista_posts.php">
                                <span data-feather="shopping-cart"></span>
                                Posts <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>admin/logout.php">
                                <span data-feather="shopping-cart"></span>
                                Cerrar Sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
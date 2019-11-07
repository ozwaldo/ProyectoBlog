<?php 
 $_SERVER['DOCUMENT_ROOT'] = "/proyectoblog/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Tecnología</title>

    <link rel="stylesheet" href="<?php echo $_SERVER['DOCUMENT_ROOT'];  ?>css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_SERVER['DOCUMENT_ROOT'];  ?>css/estilo.css">


</head>

<body>
    <div class="container">
        <header>
            <div class="row d-flex align-items-center">
                <div class="col-4"></div>
                <div class="col-4 text-center">
                    <a href="#" class="blog-logo">
                        Blog
                    </a>
                </div>
                <div class="col-4"></div>
            </div>
        </header>
        <div class="nav-blog">
            <nav class="nav d-flex justify-content-between">
                <a href="#" class="p-2 text-muted">Inicio</a>
                <a href="#" class="p-2 text-muted">Categoria 1</a>
                <a href="#" class="p-2 text-muted">Categoria 2</a>
                <a href="#" class="p-2 text-muted">Categoria 3</a>
            </nav>
        </div>
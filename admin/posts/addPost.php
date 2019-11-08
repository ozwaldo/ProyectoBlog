<?php 
    session_start();
    DEFINE("POSTS","active");
    require_once("../template-admin/header.php");
    setlocale(LC_ALL,"es_ES");
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2>Posts</h2>
    <form class="mb-5">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
        </div>
        <div class="form-group">
            <?php 
                // $fecha = new DateTime(); 
                // echo strftime("%d de %B del %Y", $fecha->getTimestamp()); ?>
            <label for="fecha">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" value="<?php echo date('Y-m-d'); ?>">

        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <select class="form-control" id="categoria">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor"
                value="<?php echo (string)$_SESSION['nombre'] ?>" required>
        </div>
        <div class="form-group">
            <label for="cotenido">Contenido</label>
            <textarea class="form-control" id="contenido" name="contenido" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="imagen">Foto</label>
            <input type="file" class="form-control-file" id="imagen" name="imagen">
        </div>
        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="estado">
            <label class="form-check-label" for="estado" name="publicado">Publicado</label>
        </div>
        <button type="submit" class="btn btn-primary">Publicar</button>
        <a href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>admin/posts/lista_posts.php"
            class="btn btn-danger">Cancelar</button>
    </form>
</main>
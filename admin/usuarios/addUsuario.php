<?php 
    session_start();
    DEFINE("USUARIOS","active");
    require_once("../template-admin/header.php");
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2>Posts</h2>
    <form action="../clases/registrarUsuario.php" method="post" class="mb-5">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            
            <label for="apaterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="Apellido Paterno" required>

        </div>
        <div class="form-group">            
            <label for="amaterno">Apellido Materno</label>
            <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="Apellido Materno" required>

        </div>
        <div class="form-group">            
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>

        </div>
        <div class="form-group">            
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>

        </div>        
        <div class="form-group">
            <label for="informacion">Información</label>
            <textarea class="form-control" id="informacion" name="informacion" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select class="form-control" id="tipo" name="tipo">
                <option value="admin">Administrador</option>
                <option value="editor">Editor</option>
            </select>
        </div>
        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="estado" name="estado" checked>
            <label class="form-check-label" for="estado" name="publicado">Activo</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>admin/usuarios/lista_usuarios.php"
            class="btn btn-danger">Cancelar</button>
    </form>
</main>
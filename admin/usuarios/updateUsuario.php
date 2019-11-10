<?php 
    session_start();

    require_once '../clases/Login.php';
    require_once '../clases/Controlador.php';
    
    $login = new Login();
    $login->verificarUsuario();

    DEFINE("USUARIOS","active");

    

    if (isset($_GET['id_usuario']) && $_GET['id_usuario'] != '') {
        $id_usuario = $_GET['id_usuario'];
    } else {
        //Redireccionamos al index.php si el post no existe
        //echo $_GET['alu_Control'];
        header('Location: ../index.php');
    }

    $control = new Controlador();

    $result = $control->get_rows(
        'id_usuario,nombre,a_paterno,a_materno,email,password,informacion,tipo,estado', 'usuarios', "id_usuario = '$id_usuario'");
    //Convertimos el resultado de la consulta en un arreglo
    $result = $result->getSiguienteRegistro();

    include "../template-admin/header.php";
?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2>Usuario</h2>
    <form action="../clases/actualizarUsuario.php" method="post" class="mb-5">
        <div class="form-group">
            <label for="idUsuario">Id Usuario</label>
            <input type="text" class="form-control-plaintext" id="idUsuario" name="id_usuario" value="<?php echo $result['id_usuario']; ?>"" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $result['nombre']; ?>"" required>
        </div>
        <div class="form-group">
            
            <label for="apaterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="apaterno" name="a_paterno" value="<?php echo $result['a_paterno']; ?>" required>

        </div>
        <div class="form-group">            
            <label for="amaterno">Apellido Materno</label>
            <input type="text" class="form-control" id="amaterno" name="a_materno" value="<?php echo $result['a_materno']; ?>" required>

        </div>
        <div class="form-group">            
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $result['email']; ?>" required>

        </div>
        <!-- <div class="form-group">            
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $result['password']; ?>" required>

        </div>     -->    
        <div class="form-group">
            <label for="informacion">Información</label>
            <textarea class="form-control" id="informacion" name="informacion" rows="3" required><?php echo $result['informacion']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select class="form-control" id="tipo" name="tipo" >
                <option value="admin" <?php $result['tipo'] == 0 ? print("selected") : print("") ; ?>>Administrador</option>
                <option value="editor" <?php $result['tipo'] == 1 ? print("selected") : print("") ; ?>>Editor</option>
            </select>
        </div>
        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="estado" name="estado" <?php $result['estado'] == 1 ? print("checked") : "" ; ?>>
            <label class="form-check-label" for="estado" name="publicado">Activo</label>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>admin/usuarios/lista_usuarios.php"
            class="btn btn-danger">Cancelar</button>
    </form>
</main>
<?php 
    session_start();

    DEFINE("USUARIOS","active");

    require_once '../clases/Login.php';
    require_once '../clases/Controlador.php';

    $control = new Controlador();    
    
    $login = new Login();
    $login->verificarUsuario();

    include ("../template-admin/header.php");

    $result = $control->get_rows(
        'id_usuario,nombre,a_paterno,a_materno,email,informacion,tipo,estado', 'usuarios', "", ' tipo ASC ');

    

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2>Usuarios</h2>

    
    <a href="addUsuario.php" class="btn btn-primary my-3 ">Agregar Usuario</a>
    
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Paterno</th>
                    <th>Email</th>
                    <th>Información</th>
                    <th>Tipo</th>
                    <th>Estado</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    $regs = $result->getNumRegistros();
                    if ($regs > 0) {
                        $i = 0;
                        while ($row = $result->getAssoc()) {
                            extract($row);
                            $i +=1;                                            
                ?>
                            <tr>
                                <td><?php echo $nombre; ?></td>
                                <td><?php echo $a_paterno; ?></td>
                                <td><?php echo $a_materno; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $informacion; ?></td>
                                <td><?php echo $tipo; ?></td>
                                <td><?php echo $estado; ?></td>
                                
                                <td><a href="updateUsuario.php?id_usuario=<?php echo $id_usuario; ?>">Actualizar</a></td>
                                <td><a href="deleteUsuario.php?id_usuario=<?php echo $id_usuario; ?>"">Eliminar</a></td>
                            </tr>
                <?php
                        }
                    }
                ?>                
            </tbody>
        </table>
    </div>
</main>
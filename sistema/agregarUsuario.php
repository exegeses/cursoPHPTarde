<?php
    #require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $chequeo = agregarUsuario();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo Usuario</h1>
<?php
        $colorDiv = 'danger';
        $mensaje = 'No se pudo agregar el usuario';

        if( $chequeo ){
            $colorDiv = 'success';
            $mensaje = 'Usuario agregado correctamente.';
        }
?>
        <div class="alert alert-<?= $colorDiv ?>">
            <?= $mensaje ?>
            <a href="adminUsuarios.php" class="btn btn-light">
                volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
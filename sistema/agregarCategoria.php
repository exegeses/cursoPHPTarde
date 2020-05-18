<?php
    #require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = agregarCategoria();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva categoría.</h1>
<?php
        $colorDiv = 'danger';
        $mensaje = 'No se pudo agregar la Categoría,';

        if( $chequeo ){
            $colorDiv = 'success';
            $mensaje = 'Categoría agregada correctamente.';
        }
?>
        <div class="alert alert-<?= $colorDiv ?>">
            <?= $mensaje ?>
            <a href="adminCategorias.php" class="btn btn-light">
                volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
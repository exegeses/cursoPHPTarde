<?php
    #require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
        $chequeo = modificarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de un producto</h1>
<?php
        $colorDiv = 'danger';
        $mensaje = 'No se pudo modificar el producto,';

        if( $chequeo ){
            $colorDiv = 'success';
            $mensaje = 'Producto modificado correctamente.';
        }
?>
        <div class="alert alert-<?= $colorDiv ?>">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-light">
                volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
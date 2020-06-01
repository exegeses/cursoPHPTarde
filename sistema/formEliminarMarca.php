<?php
    #require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
        $cantidad = cantidadProductosPorMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>

<?php
    if( $cantidad > 0 ) {
?>
        <div class="alert alert-danger">
            Advertencia! No se puede eliminar la marca seleccionada,
            ya que tiene producto/s relacionado/s.

            <a href="adminMarcas.php" class="btn btn-outline-secondary">
                volver a panel
            </a>
        </div>
<?php
    }else{
?>
        <div class="article card border-danger text-danger col-md-6">
            Se eliminará la marca:

        </div>
<?php
    }
?>


    </main>

<?php  include 'includes/footer.php';  ?>
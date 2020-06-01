<?php
    #require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
        $producto = verProductoPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un producto</h1>

        <article class="card col-md-6 py-2 border-danger text-danger mx-auto">
            <div class="row">
                <div class="col">
                    <img src="productos/<?= $producto['prdImagen'] ?>" class="img_thumbnail">
                </div>
                <div class="col">
                    <h2 class="display-6">
                        <?= $producto['prdNombre'] ?>
                    </h2>
                    <?= $producto['mkNombre'] ?> - <?= $producto['catNombre'] ?>
                    <br>
                    Presentacion: <?= $producto['prdPresentacion'] ?> 
                    <br>
                    $<?= $producto['prdPrecio'] ?>

                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" name="idProducto" value="<?= $producto['idProducto'] ?>">
                        <button class="btn btn-danger btn-block my-3">
                            Confirmar baja
                        </button>
                        <a href="adminProductos.php" class="btn btn-outline-secondary btn-block">
                            Volver a panel
                        </a>
                    </form>

                </div>
            </div>
        </article>

        <script>
            Swal.fire({
                title: '¿Desea eliminar este producto?',
                text: "Esta acción no se puede deshacer",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#666',
                cancelButtonText: 'Volver a panel',
                confirmButtonColor: '#d00',
                confirmButtonText: 'Si, lo quiero eliminar!'
            }).then((result) => {
                if ( !result.value ) {
                    //redirección a admin productps
                    window.location = 'adminProductos.php'
                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>
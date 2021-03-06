<?php
    require 'config/config.php';
    require 'funciones/autenticar.php';
            autenticar();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Dashboard - Panel principal de administración </h1>

        <section class="list-group">
            <a href="adminMarcas.php" class="list-group-item list-group-item-action">
                Panel de administración de Marcas.
            </a>
            <a href="adminCategorias.php" class="list-group-item list-group-item-action">
                Panel de administración de Categorías.
            </a>
            <a href="adminProductos.php" class="list-group-item list-group-item-action">
                Panel de administración de Productos.
            </a>
            <a href="<?php echo ($_SESSION['idRol'] == 1 )?'adminUsuarios.php':'#'; ?>"
               class="list-group-item list-group-item-action
               <?= ($_SESSION['idRol']!=1 )?' disabled" tabindex="-1" aria-disabled="true':''; ?>">
                Panel de administración de Usuarios.
            </a>
        </section>

    </main>

<?php  include 'includes/footer.php';  ?>

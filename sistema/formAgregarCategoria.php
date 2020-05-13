<?php
    #require 'config/config.php';
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva categoria</h1>

        <div class="alert alert-secondary p-4">
            <form action="agregarCategoria.php" method="post">
                Categoria:
                <br>
                <input type="text" name="catNombre" class="form-control">
                <br>
                <button class="btn btn-dark">
                    Agregar categoría
                </button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>
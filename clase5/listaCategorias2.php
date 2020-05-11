<?php

    require 'conexion.php';
    $link = conectar();

    $sql = "SELECT idCategoria, catNombre 
                FROM categorias";
    $resultado = mysqli_query($link, $sql);

    include 'header.html';
?>
    <main class="container">
        <h1>Lista de categorias</h1>

        <ul class="list-group">
<?php

    while ( $categoria = mysqli_fetch_assoc($resultado) ){
?>        
        <li class="list-group-item list-group-item-action">
                <?= $categoria['idCategoria'] ?>
                <?= $categoria['catNombre'] ?>
        </li>
<?php
    }
?>
        </ul>
        
    </main>

<?php
    include 'footer.html'
?>
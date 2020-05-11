<?php

    $link = mysqli_connect(
                        'localhost',
                        'root',
                        'root',
                        'catalogoPHP'
                );
    $sql = "SELECT idCategoria, catNombre 
                FROM categorias";
    $resultado = mysqli_query($link, $sql);
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Lista de categorias</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <header class="bg-info p-4">
        soy el header
    </header>
    <main class="container">
        <h1>Lista de categorias</h1>

        <ul class="list-group">
<?php

    while ( $categoria = mysqli_fetch_assoc($resultado) ){
?>        
        <li class="list-group-item list-group-item-action"><?= $categoria['idCategoria'] ?> <?= $categoria['catNombre'] ?> </li>
<?php
    }
?>
        </ul>
        
    </main>

    </body>
    </html>


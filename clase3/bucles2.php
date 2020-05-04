<?php
    $italianos = [
            'Maseratti', 'Lamborguini', 'Bugatti',
            'Ferrari', 'Lancia', 'Pagani', 'Alfa Romeo',
            'Fiat'
    ];
    $n = 0;
    $cantidad = count($italianos);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <header class="bg-dark p-3 text-light">
        Bucle dinámico
    </header>
    <main class="container">
        <h1>Lista Dinámica usando bootstrap</h1>

        <ul class="list-group">
<?php
    //inicio del bucle
        while ( $n < $cantidad ){
?>
            <li class="list-group-item list-group-item-action">
                <?php echo $italianos[$n]; ?>
            </li>
<?php
            $n++;
    }
    // fin de bucle
?>
        </ul>

    </main>


</body>
</html>
<?php
    $descripciones = ["Malla Apple Watch","Tour en bote", "Cedric, stand up show", "paseo en kayak", "cambio de aceite Midas", "Parking en el aeropuerto", "Spa con pileta", "Tobogan acuático"];
    $precios = [9.99, 30, 29.75, 79, 22, 10.50, 21, 29.99];
    $imagenes = ["apple-Watch", "bote", "cedric", "kayaks", "midas", "parking", "pileta", "tobogan"];
    $cantidad = count($descripciones);
    $i = 0;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <main class="container">
            <h1>Listado de ofertas</h1>

            <section class="row">
<?php
        while( $i < $cantidad ){
?>
                <article class="card col-3 p-1">
                    <img src="imagenesGroupon/<?= $imagenes[$i] ?>.jpg" class="card-img-top">
                    <div class="card-body">
                        <h2><?= $descripciones[$i] ?></h2>
                        <span class="lead text-success">$<?= $precios[$i] ?></span>
                    </div>
                </article>
<?php
            $i++;
        }
?>

            </section>

        </main>
    </body>
</html>

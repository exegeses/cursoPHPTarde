<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];

        echo 'Tu nombre es: ', $nombre;
        echo '<br>';
        echo 'Tu email es: ', $email;
    ?>

</body>
</html>
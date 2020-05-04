<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];
        if( $usuario == 'asdfg' && $clave == '1234' ){
            echo 'Bienvenido';
        }
        else{
            echo 'Usuario y/o clave incorrectos';
        }
    ?>
</body>
</html>
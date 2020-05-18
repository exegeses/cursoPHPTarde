<?php
    $prdImagen = $_FILES['prdImagen'];

    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    echo $_FILES['prdImagen']['name'];
?>
<hr>
<?php

    $path = 'productos/';
    $prdImagen = $_FILES['prdImagen']['name'];
    $tmp = $_FILES['prdImagen']['tmp_name'];
    move_uploaded_file($tmp, $path.$prdImagen );

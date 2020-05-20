<?php
    $prdImagen = $_FILES['prdImagen'];

    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    echo $_FILES['prdImagen']['name'];
?>
<hr>
<?php

    function subirArchivo()
    {
        $prdImagen = 'noDisponible.jpg'; // si NO enviaron archivo

        if( $_FILES['prdImagen']['error'] == 0 ){  // si enviaron archivo y esta OK
            $path = 'productos/';
            $prdImagen = $_FILES['prdImagen']['name'];
            $tmp = $_FILES['prdImagen']['tmp_name'];
            move_uploaded_file($tmp, $path.$prdImagen );
        }
        return $prdImagen;
    }

    $prdImagen = subirArchivo();
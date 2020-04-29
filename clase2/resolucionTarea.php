<?php

    $numero = 50;

    if ( $numero < 100 ){
        echo '<img src="imagenes/ok.png">';
    }
    else{
        echo '<img src="imagenes/error.png">';
    }
?>
<hr>
<?php

    $numero = 50;
    if ( $numero < 100 ){
        $img = 'ok';
    }
    else{
        $img = 'error';
    }
?>
    <img src="imagenes/<?php echo $img ?>.png">

<hr>
<?php

    $numero = 50;
    $img = 'error';
    if ( $numero < 100 ){
        $img = 'ok';
    }
?>
<img src="imagenes/<?php echo $img ?>.png">

<?php

    $semana = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
    $n = 0; //inicio

    echo '<ul>';

    while ( $n < 7 ){

        echo '<li>', $semana[$n], '</li>';
        $n++;

    }
    echo '</ul>';
?>



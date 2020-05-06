<?php

    ### Declaración
    function colorear( $frase, $codigo )
    {
        return '<span style="color: '. $codigo. '">'. $frase. '</span><br>';
    }

    function duplicar( $nro )
    {
        $resultado = $nro * 2;
        return $resultado;
    }

    ### llamado a ejecución (invocar)

    echo colorear('PHP y mySQL', '#f99');
    echo colorear('texto de prueba', '#03d');
    echo colorear('Texto naranja', '#d60');

    echo duplicar(15);

    echo '<hr>';

    echo colorear( duplicar(625), '#0a3' );
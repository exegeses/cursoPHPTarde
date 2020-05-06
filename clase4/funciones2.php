<?php

    function multiplicar($nro1, $nro2)
    {
        if( is_numeric($nro1) && is_numeric($nro2) ){
            $resultado = $nro1 * $nro2;
            return $resultado;
        }
        else{
            return 'debe utilizar números';
        }
    }


    echo multiplicar(4, 'kiwis');
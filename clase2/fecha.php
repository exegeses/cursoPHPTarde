<?php
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    //setlocale(LC_ALL, 'es_ES'); no funciona

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fecha usando PHP</title>
</head>
<body>
    <h1>Fecha usando PHP</h1>

    formato timestamp:
    <?php echo time(); ?>
    <hr>
    <?php
        $diaMes = date('d');
        $mes = date('m');
        $anio = date('Y');
        echo $diaMes, '/', $mes, '/', $anio;
    ?>
    <hr>
    <?php
        $fechaHora = date('d/m/Y H:i:s');
        echo $fechaHora
    ?>
    <hr>
    <?php
        /*
        día de la semana en números
        0 - Domingo
        1 - Lunes
        2 - Martes
        ...
        */
        $diaSemana = date('w');
        //echo $diaSemana;
        switch ( $diaSemana ){
            case 0:
                $diaSemanaTexto = 'Domingo';
                break;
            case 1:
                $diaSemanaTexto = 'Lunes';
                break;
            case 2:
                $diaSemanaTexto = 'Martes';
                break;
            case 3:
                $diaSemanaTexto = 'Miércoles';
                break;
            case 4:
                $diaSemanaTexto = 'Jueves';
                break;
            case 5:
                $diaSemanaTexto = 'Viernes';
                break;
            default:
                $diaSemanaTexto = 'Sábado';
                break;

        }
        echo $diaSemanaTexto;
    ?>

</body>
</html>
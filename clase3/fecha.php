<?php

    $semana = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viern es","Sábado"];
    $meses = [1=>'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];

    $nDiaSemana = date('w'); #número del día de la semana
    $nDiaMes = date('d'); # número del día del mes
    $nMes = date('n'); #número del mes actual
    $anio = date('Y');

    echo 'Hoy es ', $semana[$nDiaSemana], ' ', $nDiaMes, ' de ', $meses[$nMes], ' de ', $anio;

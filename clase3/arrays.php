<?php

    $celulares = array(
                        'Samsung', 'Apple',
                        'Huawei', 'Xiaomi',
                        'Motorola', 'Blue'
                    );
    //echo $celulares;

    #imprimir un elemento de un array
    echo $celulares[0];
?><br>
<?php
    #volcar en pantalla en formato humanamente legible
echo '<pre>';
    print_r($celulares);
echo '</pre>';
?>
<br>
<?php
    $alemanes = [
                    'BMW', 'Mercedes Benz', 6 => 'Audi',
                    'Porsche', 'Volkswagen', 'Daimler',
                    'Opel'
                ];
    #volcar en pantalla en formato humanamente legible
echo '<pre>';
    print_r($alemanes);
echo '</pre>';
?>

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
<br>
<?php
    # array asociativo
    $celulares2 = [
                    'Motorola' => 'Star Tac',
                    'Nokia' => 1100,
                    'Apple' => 'iPhone X',
                    'Samsung' => 'Galaxy J5',
                    'Xiaomi' => 'miA2'
                ];
#volcar en pantalla en formato humanamente legible
echo '<pre>';
print_r($celulares2);
echo '</pre>';
?>
<br>
<?php
    echo $celulares2['Xiaomi'];
?>    

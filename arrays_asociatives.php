<?php
$agencias = array(
    'FORD' => 'Escape',
    'HONDA' => 'Civic',
    'CHEVROLET' => 'Aveo',
    'SEAT' => 'Leon');

// Imprime la llave $dato de la lista $agencias
foreach ($agencias as $dato => $valor) {
    echo $dato . '<br>';
};

// Imprime el $valor de la llave $dato de la lista $agencias
foreach ($agencias as $dato => $valor) {
    echo $valor . '<br>';
};
?>
<?php
// Array representando um possível conjunto de registros retornado de um banco de dados
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'Junior',
        'last_name' => 'Luciano',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Angus',
        'last_name' => 'Bonnie',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Rafa',
        'last_name' => 'Severino',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Cecilia',
        'last_name' => 'Vanja',
    )
);
 
$first_names = array_column($records, 'first_name');
print_r($first_names);
?>
<?php

$list = [
  ['id' => 1, 'userId' => 5],
  ['id' => 2, 'userId' => 5],
  ['id' => 3, 'userId' => 6],
];
$userId = 5;

echo array_count_values(array_column($list, 'userId'))[$userId]; 
// outputs: 2
?>
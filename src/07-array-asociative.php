<?php

$cliente = [
  'nombre' => 'Joaquín',
  'apellido' => 'Di Giorgio',
  'edad' => 14,
  'información' => [
    'tipo' => 'premium',
    'disponible' => 100,
  ],
];

$cliente['email'] = 'jkd@gmail.com';

echo '<pre>';
var_dump($cliente);
echo '</pre>';

echo $cliente['información']['tipo'];

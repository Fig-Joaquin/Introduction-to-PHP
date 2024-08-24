<?php

$productos = [
  ['nombre' => 'Tablet',
  'precio' => 200,
  'disponible' => true,
  ],
  ['nombre' => 'Televisión',
  'precio' => 300,
  'disponible' => true,
  ],
  ['nombre' => 'Monitor',
  'precio' => 400,
  'disponible' => false,
  ],
];


$json_productos = json_encode($productos, JSON_UNESCAPED_UNICODE);
?>
<?php
echo '<pre>';
var_dump($productos); ?>
________________________________________________________________
<?php
echo '</br>';
var_dump($json_productos);
echo '</pre>';

$json_array = json_decode($json_productos);

echo '<pre>';
var_dump($json_array);
echo '</pre>';

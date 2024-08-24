<?php

$clientes = [];
$clientes2 = array();
$clientes3 = array('Joaquín', 'Di Giorgio', 14);
$clientes = [
  'nombre' => 'francisco',
];
// * Empty
echo 'dump_clientes: -> ';
var_dump(empty($clientes));
echo '<br>';
echo 'dump_clientes2: -> ';
var_dump(empty($clientes2));
echo '<br>';
echo 'dump_clientes3: -> ';
var_dump(empty($clientes3));
echo '<br>';
echo '<br>';

// * Isset - Revisar si el array está creado o una propiedad está definida
echo 'isset_clientes4: -> ';
var_dump(isset($clientes4)); // No existe
echo '<br>';
// * Permite revisar si una propiedad de un arreglo existe!
echo 'dump_clientes: -> ';
var_dump(isset($clientes['nombre'])); // Existe


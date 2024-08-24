<?php

/*
  * in_array => Busca elementos
  * sort => Ordena menor a mayor
  * rsort => Ordena mayor a menor
  * asort => Ordena por valores
  * arsort => Ordena por valores (Zz - aA)
  * ksort => Ordena por llaves
  * krsort => Ordena por llaves (Zz - aA)
*/

$frutas = ['fresa', 'manzana', 'pera', 'uva'];
$edades = array(13, 7, 15, 19, 20, 31, 40, 38, 50, 13);
$cliente = [
  'nombre' => 'Joaquín',
  'apellido' => 'Di Giorgio',
  'edad' => 14,
  'información' => [
    'tipo' => 'premium',
    'disponible' => 100,
  ],
];

// * in_array
// ? Buscar elementos de un array
var_dump(in_array('fresa', $frutas)); // true
echo '<br>';
var_dump(in_array('platano', $frutas)); // false

// * sort
// ? Ordenar de menor a mayor
echo '<br>';
echo 'Sort: edades: ->';
sort($edades); // ! Ordenar de menor a mayor

echo '<pre>';
var_dump($edades);
echo '</pre>';

// * Rsort
// ? Ordenar de mayor a menor
echo '<br>';
echo 'Rsort: edades: ->';
rsort($edades); // ! Ordenar de menor a mayor

echo '<pre>';
var_dump($edades);
echo '</pre>';

// * Asort
// ? Ordena por valores
/*
asort() es una función que ordena un array asociativo por los
valores de sus elementos,
manteniendo la asociación entre las llaves y los valores.
Ordena los valores de menor a mayor, pero sin cambiar las claves
asociadas a esos valores.
*/

/*
Se usa cuando quieres ordenar los elementos de un array según
sus valores, pero necesitas mantener la relación entre las claves
y los valores.
*/
echo '<br>';
echo 'Asort: cliente: ->';
asort($cliente); // ! Orden álfabetico

echo '<pre>';
var_dump($cliente);
echo '</pre>';


// * Ksort
// ? Ordena por llaves
/*
ksort() es una función que ordena un array asociativo por
las llaves de los elementos, en lugar de los valores.

Ordena las llaves de menor a mayor (alfabéticamente si
son cadenas, de menor a mayor si son números).
*/

/*
Se usa cuando necesitas ordenar un array asociativo según las claves,
sin importar los valores.
*/
echo '<br>';
echo 'Ksort: cliente: ->';
ksort($cliente); // ! Orden álfabetico

echo '<pre>';
var_dump($cliente);
echo '</pre>';

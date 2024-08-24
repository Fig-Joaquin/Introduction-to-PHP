<?php

$void_array = array();
$carrito = [];

// Usado más en laravel
$frutas = ['Frutilla', 'Cereza', 'Manzanza', 'Pera', 'Banana'];

// Contenidos de un array
echo "<pre>";
var_dump($frutas);
echo"</pre>";
echo '<br>';

// Añadir un elemento al array según el indice
$carrito[0] = $frutas[0];
$carrito[1] = 'Kiwi';

// Agregar elemento al final del array
array_push($carrito, $frutas[3]);

// Agregar al inicio
array_unshift($carrito, $frutas[4]);

echo "<pre>";
var_dump($carrito);
echo"</pre>";

// Ver un elemento del array
echo $frutas[0];

$clientes = array('Ariel', 'Joaquín', 'Ignacio', 'Santiago', 'Lucas');
echo "<pre>";
var_dump($clientes);
echo"</pre>";

<?php

define ('DI_GIORGIO', 'Di Giorgio');

$first_name = 'Joaquín';
$second_name = 'Ignacio';
$surname = DI_GIORGIO;
$testing_word = '       vocabulary        '; // Muchos espacios

echo $surname;
echo '<br>';

// * Contando strings con strlen

// ? Tilde cuenta como un caracter más
echo strlen($first_name);
echo '<br>';

echo strlen($second_name);
echo '<br>';

// ? Cuenta cada caracter, incluyendo el espacio
echo strlen($surname);
echo '<br>';

// * Eliminar espacios en blanco # Test_2
echo $testing_word;
echo '<br>';
echo strlen($testing_word); //Prueba antes del uso de trim
echo '<br>';
$vocabulary = trim($testing_word);
echo strlen($vocabulary);
echo '<br>';

// * Convertir en Mayusculas
echo strtoupper($first_name);
echo '<br>';

// * Convertir en Minusculas
echo strtolower($second_name);
echo '<br>';

// * Reemplazar palabras
echo str_replace(DI_GIORGIO, 'Sánchez', $surname);
$surname = str_replace(DI_GIORGIO, 'Sánchez', $surname);
echo '<br>';

// * Si existe el string
echo strpos($second_name, 'Igna');
echo '<br>';
// * Concatenar
echo 'El usuario: ' . $first_name . ' '. $second_name . ' ' . $surname . ' ha sido encontrado!';
echo '<br>';
#

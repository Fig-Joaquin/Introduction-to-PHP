<?php

$autenticado = true;
$admin = true;

$cliente = [
  'nombre' => 'Joaquín',
  'apellido' => 'Di Giorgio',
  'edad' => 14,
  'saldo' => 1000,
  'informacion' => [
    'tipo' => 'premium',
    'disponible' => 500,
  ],
];

if($autenticado){
  echo 'Usuario autenticado';
  if($cliente['informacion']['disponible'] > 0){
    echo '<br>El cliente tiene saldo para comprar';
    if($cliente['informacion']['tipo'] === 'premium'){
      echo '<br>El cliente es premium y tiene descuento';
    }
    else{
      echo '<br>El cliente no es premium, no tiene descuento';
    }
  } else {
    echo '<br>El cliente no tiene saldo';
  }
} else {
  echo 'Usuario no autenticado';
}
echo '<br>';

// Switch

$lenguaje = ['PHP', 'Javascript'];

switch ($lenguaje){
  case in_array('PHP', $lenguaje) == 'PHP' :
    echo 'PHP, un gran lenguaje';
    break;
  case in_array('Javascript', $lenguaje) == 'Javascript':
    echo 'JavaScript, un gran lenguaje';
    break;
  case in_array('Python', $lenguaje) == 'Python':
    echo 'Python, un gran lenguaje';
    break;
  default:
    echo 'No se encontro el lenguaje';
    break;
}







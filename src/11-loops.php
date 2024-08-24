<?php

// * While

$i = 0;
echo 'While => <br>';

// Empieza desde el 0 y ermina en el 9
// Primero evalúa antes de entrar
while ($i < 10) {
  echo 'Numero: => ', $i . '<br>';
  $i++;
}


// * Do while
$i = 100;
echo 'Do while => <br>';

// No evalúa antes de entrar
// Entra con el número 100 y luego sale ya que no cumple condición: $i < 10
do {
  echo 'Numero: => ', $i . '<br>';
  $i++;
} while ($i < 10);

// * For
echo 'For => <br>';
for ($i = 0; $i < 10; $i++) {
  echo 'Numero: => ', $i . '<br>';
}

// * Fizz Buzz

// for ($i = 1; $i <= 100; $i++) {
//   if ($i % 3 === 0 && $i % 5 === 0) {
//     echo $i,'.FizzBuzz <br>';
//   } elseif ($i % 3 === 0) {
//     echo $i,'.Fizz <br>';
//   } elseif ($i % 5 === 0) {
//     echo $i, '.Buzz <br>';
//   }
//   else {
//     echo $i, '<br>';
//   }
// }

echo '<br>';

// * Foreach
$carrito = ['Monitor','Mouse','Teclado','Silla','Gabinete'];

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

foreach($carrito as $carro){
  echo $carro,'<br>';
}

echo '<br>';
// * Recorriendo con método For
for($i = 0; $i < count($carrito); $i++){
  echo $carrito[$i],'<br>';
}

echo '<br>';
// * Recorriendo un array asociativo
foreach($cliente as $key => $valor){
  if(is_array($valor)){
    echo $key,': <br>';
    foreach($valor as $key2 => $valor2){
      echo $key2,': ',$valor2,'<br>';
    }
  } else {
    echo $key,': ',$valor,'<br>';
  }
}


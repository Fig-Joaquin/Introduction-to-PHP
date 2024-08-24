<?php

// * Tipado estricto

declare(strict_types = 1);

// ? Sin tipado estricto puedes usar '20' y '30' como strings y un int para sumar
// ! No recomendable
function sumar (int $sumar1, int $sumar2 = 0){
  echo $sumar1 + $sumar2;
}

sumar(15, 20);


// * Tipado estricto. Puedes definir que devolverá.
function usuarioAutenticado (bool $usuario) : string { // Returna string
  return $usuario ? 'Está autenticado' : 'No está autenticado';
}

// * Función no retorna nada
function usuarioEsAutenticado (bool $usuario) { // Returna string
  echo $usuario ? 'Está autenticado' : 'No está autenticado';
}

$usuario = true;
echo '<br>';
echo 'Funcion: ' . usuarioAutenticado($usuario);
echo '<br>';
echo 'Funcion2: ';
usuarioEsAutenticado($usuario);






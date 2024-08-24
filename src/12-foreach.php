<?php

$productos = [
  ['nombre' => 'Tablet',
  'precio' => 200,
  'disponible' => true,
  ],
  ['nombre' => 'Television',
  'precio' => 300,
  'disponible' => true,
  ],
  ['nombre' => 'Monitor',
  'precio' => 400,
  'disponible' => false,
  ],
];

foreach ($productos as $producto) { ?>
  <ul>
    <p> Producto: <?php echo $producto['nombre']; ?></p>
    <p> Precio: <?php echo '$' . $producto['precio']; ?></p>
    <?php echo ($producto['disponible']) ? '<p> Producto disponible </p>' : '<p> Producto no disponible </p>'; ?>
      <!--
      // if($producto['disponible']){
      //   echo '<p> Producto disponible </p>';
      // } else {
      //   echo '<p> Producto no disponible </p>';
      // } -->
________________________________________________________________

  </ul>
  <?php
}

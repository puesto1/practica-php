<?php

include("functions.php");
$temperaturas = inicializar_array(10, 1, 20);

$maximo = calcular_maximo($temperaturas);
echo "<pre>";
echo "<h2>nº de elementos: 10 </h2/>";
echo "<h2>Tenperatura maxima: $maximo </h2>";
print_r($temperaturas);
echo "</pre>";
?>
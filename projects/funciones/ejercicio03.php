<?php

include("functions.php");
$temperaturas = inicializar_array(10, 1, 20);

$media = calcular_media($temperaturas);
echo "<pre>";
echo "<h2>nº de elementos: 10 </h2/>";
echo "<h2>Media: $media </h2>";
//print_r($listaA);
echo "</pre>";
?>
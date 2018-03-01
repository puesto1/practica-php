<?php

include("functions.php");
$temperaturas = inicializar_array(10, 1, 20);

$media = calcular_media($temperaturas);

echo "<h2>Media: $media </h2>";
?>
<?php

$alumnos = array(
    "Maria"=>"28",
    "Juan"=>"29",
    "Antonio"=>"31",
    "Pepe"=>"27");

// Orden ascendente por valor
echo "<h3>Orden ascendente por valor (asort)</h3>";
asort($alumnos);

foreach ($alumnos as $clave => $valor){

    echo "<h2>$clave = $valor</h2>";
}
// Orden descendente por valor
echo "<h3>Orden descendente por valor (arsort)</h3>";
arsort($alumnos);

foreach ($alumnos as $clave => $valor){

    echo "<h2>$clave = $valor</h2>";
}

// Orden ascendente por clave
echo "<h3>Orden ascendente por clave (ksort)</h3>";
ksort($alumnos);

foreach ($alumnos as $clave => $valor){

    echo "<h2>$clave = $valor</h2>";
}
// Orden descendente por clave
echo "<h3>Orden descendente por clave (krsort)</h3>";
krsort($alumnos);

foreach ($alumnos as $clave => $valor){

    echo "<h2>$clave = $valor</h2>";
}


?>
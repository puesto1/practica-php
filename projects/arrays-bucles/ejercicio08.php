<?php

$alumnos = array(
    "Maria"=>"28",
    "Juan"=>"29",
    "Antonio"=>"31",
    "Pepe"=>"27");

<<<<<<< HEAD
// Orden ascendente por valor
echo "<h3>Orden ascendente por valor (asort)</h3>";
=======
// Orden asecendente por valor
echo "<h3>Orden asecendente por valor (asort)</h3>";
>>>>>>> 6ecdf65a2da2be13a8c0cb3dcfaad18a75d95ca7
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
<<<<<<< HEAD
echo "<h3>Orden ascendente por clave (ksort)</h3>";
=======
echo "<h3>Orden asecendente por clave (ksort)</h3>";
>>>>>>> 6ecdf65a2da2be13a8c0cb3dcfaad18a75d95ca7
ksort($alumnos);

foreach ($alumnos as $clave => $valor){

    echo "<h2>$clave = $valor</h2>";
}
// Orden descendente por clave
<<<<<<< HEAD
echo "<h3>Orden descendente por clave (krsort)</h3>";
=======
echo "<h3>Orden descendente por valor (krsort)</h3>";
>>>>>>> 6ecdf65a2da2be13a8c0cb3dcfaad18a75d95ca7
krsort($alumnos);

foreach ($alumnos as $clave => $valor){

    echo "<h2>$clave = $valor</h2>";
}


?>
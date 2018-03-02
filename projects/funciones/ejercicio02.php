<?php

//include("functions.php");
// Uso de la funcion
$listaA = inicializar_array(10, 1, 20);
echo "<pre>";
<<<<<<< HEAD
echo "<h1>Numero elementos: 10 </h1>";
echo "<h2>Numero min: $listaA[0] </h2>";
echo "<h2>Numero max: $listaA[1] </h2>";
=======
>>>>>>> 6ecdf65a2da2be13a8c0cb3dcfaad18a75d95ca7
print_r($listaA);
echo "</pre>";

$listaB = inicializar_array(30, -10, -20);
echo "<pre>";
<<<<<<< HEAD
echo "<h1>Numero elementos: 30 </h1>";
echo "<h2>Numero min: $listaB[0] </h2>";
echo "<h2>Numero max: $listaB[1] </h2>";
=======
>>>>>>> 6ecdf65a2da2be13a8c0cb3dcfaad18a75d95ca7
print_r($listaB);
echo "</pre>";

//Definicion de la funcion
function inicializar_array($numero_elementos, $min, $max) {
    $lista = array();
    
    

    for($i = 0; $i < $numero_elementos; $i++) {
       
       $lista[$i] = rand($min, $max);
       
        
            }

    return $lista;
   


}
?>
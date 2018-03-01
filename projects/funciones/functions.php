<?php


//Definicion de la funcion
function inicializar_array($numero_elementos, $min, $max) {
    $lista = array();
    
    

    for($i = 0; $i < $numero_elementos; $i++) {
       
       $lista[$i] = rand($min, $max);
       
        
            }

    return $lista;
   


}


//Definicion de la funcion


function calcular_media($lista) {
    $suma = 0;
    $numero_elementos = count($lista);
    

    for($i = 0; $i < $numero_elementos; $i++) {
       
       $suma = $suma + $lista[$i];
       
        
            }
        $media = $suma / count($lista);

    return $media
   


}
?>
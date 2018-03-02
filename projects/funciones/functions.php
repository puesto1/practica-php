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

    return $media;
 
}

//Definicion de la funcion

// Calculo el maximo

function calcular_maximo($lista) {

    $maximo = $lista[0];
    $i = 1; 
        
    $numero_elementos = count($lista);
    
    while ($i < $numero_elementos){
    
        if ($lista[$i] > $maximo)
        {
            $maximo = $lista[$i];
        }
        $i++;
    
    }

    return $maximo;
   


}
//Definicion de la funcion

// Calculo el minimo

function calcular_minimo($lista) {

    $minimo = $lista[0];
    $i = 1; 
        
    $numero_elementos = count($lista);
    
    while ($i < $numero_elementos){
    
        if ($lista[$i] < $minimo)
        {
            $minimo = $lista[$i];
        }
        $i++;
    
    }

    return $minimo;
}

//Definicion de la funcion

// imprime Array

function imprime_array() {

    $datos = [10,11,12,13,14];
    

    return $datos;
}

?>
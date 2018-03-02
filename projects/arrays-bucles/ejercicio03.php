<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form method="get">
       <p>FORMULARIO </p>

            
<div>
<label for="numeroelementos"> Nº de Temperaturas:</label>

 <input type="number" name="numeroelementos" min="1" max="100" value="1"/>
   
 <br/>
</div>

<button type="submit">Enviar</button>
 </form>

<?php
$numeroelementos = $_GET["numeroelementos"];


if (!isset($numeroelementos) || empty($numeroelementos)) die;
echo "<h1>$numeroelementos</h1>";

// Inicializo el array de temperaturas
$temperatura = array();

for ($i = 0; $i < $numeroelementos; $i++) {

    $temperatura[$i] = rand(1, 30);

}

// Calculo de la media
$suma = 0;
for ($i = 0; $i < $numeroelementos; $i++) {

    $suma = $suma + $temperatura[$i];

}
//Mas eficiente fuera del bucle
$media = $suma / $numeroelementos;

echo "<h4>La media de la temperatura es: $media </h4>";
// Calculo el maximo
$maximo = $temperatura[0];
for ($i = 1; $i < $numeroelementos; $i++){

    if ($temperatura[$i] > $maximo)
    {
        $maximo = $temperatura[$i];
    }

    }

// Calculo el minimo
$minimo = $temperatura[0];
for ($i = 1; $i < $numeroelementos; $i++){

    if ($temperatura[$i] < $minimo)
    {
        $minimo = $temperatura[$i];
    }

    }



echo "<pre>";
print_r($temperatura);
echo "</pre>";


       
?>
</body>
</html>
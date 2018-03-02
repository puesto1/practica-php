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
<label for="numero_elementos"> Nº de Temperaturas:</label>

 <input type="number" name="numero_elementos" min="1" max="100" value="10"/>
   
 <br/>
</div>

<button type="submit">Enviar</button>
 </form>

<?php
$numero_elementos = $_GET["numero_elementos"];


if (!isset($numero_elementos) || empty($numero_elementos)) die;
echo "<h1>$numero_elementos</h1>";

// Inicializo el array de temperaturas
$temperatura = array();

$i = 0;

do {
$temperatura[$i] = rand(1, 30);
    $i++;
}
while ($i < $numero_elementos); 


// Calculo de la media
$suma = 0;
$i = 0; 

do { $suma = $suma + $temperatura[$i];
    $i++;
}
while ($i < $numero_elementos);

//Mas eficiente fuera del bucle
$media = $suma / $numero_elementos;

echo "<h4>La media de la temperatura es: $media </h4>";

// Calculo el maximo
$maximo = $temperatura[0];
$i = 1;
do {
    if ($temperatura[$i] > $maximo)
    {
        $maximo = $temperatura[$i];
    }
    $i++;
}

while ($i < $numero_elementos);

    echo "<h4>La maxima temperatura es: $maximo </h4>";
// Calculo el minimo
$minimo = $temperatura[0];
$i = 1;
do {
    if ($temperatura[$i] < $minimo)
    {
        $minimo = $temperatura[$i];
    }
    $i++;
}

while ($i < $numero_elementos);

    
echo "<h4>La minima temperatura es: $minimo </h4>";

echo "<pre>";
print_r($temperatura);
echo "</pre>";


       
?>
</body>
</html>
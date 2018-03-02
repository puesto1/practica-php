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

 <input type="number" name="numero_elementos" min="1" max="30" value="10"/>
   
 <br/>
</div>

<button type="submit">Enviar</button>
 </form>

<?php
$numero_elementos = $_GET["numero_elementos"];


if (!isset($numero_elementos) || empty($numero_elementos)) die;
echo "<h2>El numero de elementos es: $numero_elementos</h2>";


// Inicializo el array de temperaturas
$temperatura = array();

$i = 0;
while ($i < $numero_elementos) {

    $temperatura[$i] = rand(1, 30);
    $i++;

}


echo "<h3>Temperaturas ordenadas de mayor a menor </h3>";
rsort($temperatura);
for ($i = 0; $i < count($temperatura); $i++) {
    echo "<h1>$temperatura[$i]</h1>";

}

echo "<h3>Temperaturas ordenadas de menor a mayor</h3>";
sort($temperatura);
for ($i = 0; $i < count($temperatura); $i++) {
    echo "<h1>$temperatura[$i]</h1>";

}


// Calculo el maximo
$maximo = $temperatura[0];
$i = 1; 
while ($i < $numero_elementos){

    if ($temperatura[$i] > $maximo)
    {
        $maximo = $temperatura[$i];
    }
    $i++;

}
    echo "<h4>La maxima temperatura es: $maximo </h4>";
// Calculo el minimo
$minimo = $temperatura[0];
$i = 1;
while ($i < $numero_elementos){

    if ($temperatura[$i] < $minimo)
    {
        $minimo = $temperatura[$i];
    }
    $i++;
}

echo "<h4>La minima temperatura es: $minimo </h4>";

echo "<pre>";
print_r($temperatura);
echo "</pre>";


       
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form method="post">
       <p>FORMULARIO </p>

            
<div>
<label for="dia"> Temperaturas:</label>

 <input type="number" name="numero_elementos" min="1" max="100" value="1"/>
   
 <br/>
</div>

<button type="submit">Enviar</button>
 </form>

<?php
$numero_elementos = $_GET["numero_elementos"];


if (!isset($numero_elementos) !! empty($numero_elementos)) die;
echo "<h1>$numero_elementos</h1>";

// Inicializo el array de temperaturas
$temperatura = array();

for ($i = 0; $i < $numero_elementos; $i++) {

    $temperatura[$i] = rand(1, 30);

}

// Calculo de la media
$suma = 0;
for ($i = 0; $i < $numero_elementos; $i++) {

    $suma = $uma + $temperatura[$i];

}
//Mas eficiente fuera del bucle
$media = $suma / $numero_elementos;

echo "<h4>La media de la temperatura es: $media </h4>";

echo "<pre>";
print_r($temperatura);
echo "</pre>";


       
?>
</body>
</html>
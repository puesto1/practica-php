<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Tabla de un numero dado</title>
</head>
<body>
<form name="formulariotabla" method="post">
       <p>FORMULARIO </p>

             <br/>
<div>
<label for="num"> Numero:</label>

 <input type="number" name="num"/>
              
</div>
<br/>

   <button type="submit">Enviar</button>
 </form>

<?php
$numero = $_POST["num"];
echo "<h1>Tabla de multiplicar del: $numero</h1>";

echo "<table border=\"1\">";

    for($i = 1; $i <= 10; $i++){
$resultado = $numero * $i;
echo "<tr>";
echo "<td> $numero </td>";
echo "<td> x </td>";
echo "<td> $i </td>";
echo "<td> = </td>";
echo "<td> $resultado </td>";
echo "</tr>";
    }
echo "</table>";
?>
</body>
</html>

<!DOCTYPE html>

<html>

<head>

<title>Formulario entrada de nº</title>

<meta charset="utf-8">

</head>

       <body>

 <form name="formularionumero"method="get">
 <h1>Tabla de multiplicar con el numero dado en el formulario</h1>
       <p>FORMULARIO </p>

        <br/>
        
<div>
<label for="name"> Numero:</label>

 <input type="text" name="numero">

              
</div>
<br/>

   <button type="submit">Enviar</button>
 </form>

<?php
$numero = (int) $_GET["numero"];

$title = "Tabla de multiplicar con el numero $numero";
echo "<br>";


if (!empty($numero) && is_int($numero))
{
    echo $title;
    echo "<br>";
    echo "<table border=\"1\">";

    for($i = 1; $i <= 10; $i++) {
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
} 
else {
    # code...
    echo "Tienes que introducir un numero";
}

?>
</body>
</html>
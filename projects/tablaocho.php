<?php>
$title = "Tabla de multiplicar del ocho";
$numero = 8;
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title> Tabla del ocho</title>
</head>
</html>
<body>

<?php
<table border = "1">
echo "<table border =\"1\">";

    for($i = 1; $i <= 10; $i++)
    {
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
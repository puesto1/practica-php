<?php
$numero = rand(1, 10);

?>

<?php
$title = "Tabla de multiplicar con el numero aleatorio $numero";

//echo "$numero";

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title> Tabla del ocho</title>
</head>
<body>

<h1><?php echo $title; ?></h1>
<?php

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

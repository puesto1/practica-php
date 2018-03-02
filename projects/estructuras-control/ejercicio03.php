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
<label for="dia"> Calendario:</label>

 <input type="number" name="dia" min="1" max="7" />
   
 <br/>
</div>

<button type="submit">Enviar</button>
 </form>

<?php
$dia = $_POST["dia"];

if (isset($dia)) {

    echo "<h1>Dia: $dia</h1>";
        echo "<br/>";

    switch ($dia) {
        case 1:
            echo "Es lunes";
                break;
        case 2:
            echo "Es martes";
                break;
        case 3:
            echo "Es miercoles";
                break;
        case 4:
            echo "Es juevess";
                break;
        case 5:
            echo "Es viernes";
                break;
        case 6:
            echo "Es sabado";
                break;
        case 7:
            echo "Es domingo";
                break;
    default:
        echo "El valor introducido no es valido";
            }
            echo "<br/>";
            echo  "Fin del switch";

        }
       
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


 <form method ="get">
    <div>
    <label for="numero_monedas">Numero de monedas:</label>
    <input type="number" name="numero_monedas" min="1" max="20" value="1"/>
    </br>
    </div>
       

    <div>
        <label for="tipo_moneda">Tipo de monedas:</label>
        <select name="tipo_moneda">
        <option value="euro" selected>Euro</option>
        <option value="corona">Corona Noruega</option>
        <option value="libra">Libra Esterlina</option>
        <option value="dolar">Dolar</option>
        <option value="franco">Franco Suizo</option>
        </select>
        </br>

    </div>

    <button type="submit">Mostrar monedas</button>

</form>

<?php
    $numero_monedas = $_GET["numero_monedas"];
    $tipo_moneda = $_GET["tipo_moneda"];

    echo $numero_monedas;
        echo "<br/>";
    echo $tipo_moneda;
    
    $monedas = array();
    $images = array();

        for($i =0; $i < $numero_monedas; $i++){
        $monedas[$i] = rand(0, 1);       
    }
        
    $images = array();
    $images["dolar"]["cara"] = 'images/dolar_cara.jpg';
    $images["dolar"]["cruz"] = 'images/dolar_cruz.jpg';
    $images["euro"]["cara"] = 'images/euro_cara.jpg';
    $images["euro"]["cruz"] = 'images/euro_cruz.jpg';
    $images["libra"]["cara"] = 'images/libra_cara.jpg';
    $images["libra"]["cruz"] = 'images/libra_cruz.jpg';
    $images["franco"]["cara"] = 'images/franco_cara.jpg';
    $images["franco"]["cruz"] = 'images/franco_cruz.jpg';
    $images["corona"]["cara"] = 'images/corona_cara.jpg';
    $images["corona"]["cruz"] = 'images/corona_cruz.jpg';
        for($i =0; $i < $numero_monedas; $i++) {
            if ($monedas[$i] == 0) {
                echo "<img src=\"".$images[$tipo_moneda]["cara"]."\">";
            }else {
                echo "<img src=\"".$images[$tipo_moneda]["cruz"]."\">";
<<<<<<< HEAD
            }

        }
=======
        }

}
>>>>>>> 6ecdf65a2da2be13a8c0cb3dcfaad18a75d95ca7
?>

</body>
</html>
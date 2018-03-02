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
    <label for="numero_dados">Numero de dados hasta 20:</label>
    <input type="number" name="numero_dados" min="1" max="20" value="1"/>
    </br>
    </div>
       
    <button type="submit">Mostrar dados</button>

</form>

<?php
    $numero_dados = $_GET["numero_dados"];
    
    echo $numero_dadoss;
        echo "<br/>";
        
    $dados = array();
    
        for($i =0; $i < $numero_dados; $i++){
        $dados[$i] = rand(0, 5);       
    }
        
    
        for($i =0; $i < $numero_dados; $i++) {
            if ($dados[$i] == 0) {
                echo "<img src=\"images/dado1.png\" />";
                
            }elseif ($dados[$i] == 1){
                echo "<img src=\"images/dado2.png\" />";
            }elseif ($dados[$i] == 2){
                echo "<img src=\"images/dado3.png\" />";
            }elseif ($dados[$i] == 3){
                echo "<img src=\"images/dado4.png\" />";
            }elseif ($dados[$i] == 4){
                echo "<img src=\"images/dado5.png\" />";
            }elseif ($dados[$i] == 5){
                echo "<img src=\"images/dado6.png\" />";
            }
        }
?>

</body>
</html>
 
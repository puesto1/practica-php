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
<label for="nota"> Calificacion:</label>

 <input type="text" name="nota" />
   
 <br/>
</div>

<button type="submit">Enviar</button>
 </form>

<?php
$nota = $_POST["nota"];

// con la funcion isset, si la variable no esta definida da un false y se salta todo
if (isset($nota)) {
    echo "<h1>Nota: $nota</h1>";
    
    if ($nota >= 0 && $nota <5) {
        echo "Insuficiente";
    }
  elseif (($nota >= 5) && ($nota < 6))
    {
        echo "Suficiente";
    }
    elseif (($nota >= 6) && ($nota < 7))
    {
  
        echo "Bien";
        
            }

    elseif (($nota >= 7) && ($nota < 9))
    {
                
        echo "Notable";
                
            }
    elseif (($nota >= 9) && ($nota <= 10))
    {
                
         echo "Sobresaliente";
                
            }
    else {
            echo "La nota introducida no es valida";


    }
    
}
?>



</body>
</html>
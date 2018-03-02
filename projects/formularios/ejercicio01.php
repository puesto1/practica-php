

 <!DOCTYPE html>

<html>

<head>

<title>Formulario sencillo</title>

<meta charset="utf-8">

</head>

       <body>

              <form name="formulariosencillo"method="get">
       <p>FORMULARIO </p>

             <br/>
<div>
<label for="name"> Nombre:</label>

 <input type="text" name="nombre">

              
</div>
<br/>
<div>
<label for="name"> Apellidos</label>

            <input type="text" name="apellidos">

            
</div>
   <button type="submit">Enviar</button>
 </form>

<?php
if (!empty($_GET["nombre"]) && !empty($_GET["apellidos"]))
{

      echo "Nombre: ".$_GET["nombre"];
      echo "<br>";
      echo "Apellidos: ".$_GET["apellidos"];
}
?>
</body>

</html>


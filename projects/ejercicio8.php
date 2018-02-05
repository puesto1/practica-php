<!DOCTYPE html>

<html>

<head>

<title>Formulario sencillo con Post </title>

<meta charset="utf-8">

</head>

       <body>

              <form name="formulariosencillo"method="post">
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
if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"]))
{

      echo "Nombre: ".$_POST["nombre"];
      echo "<br>";
      echo "Apellidos: ".$_POST["apellidos"];
}
?>
</body>

</html>


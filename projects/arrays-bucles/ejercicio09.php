
<?php

$capitales = array(
"Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
  "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
   "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
    "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
     "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
      "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
       "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");



// Orden ascendente por clave
echo "<h3>Orden ascendente por clave (ksort)</h3>";
ksort($capitales);

foreach ($capitales as $clave => $valor){

    echo "<h4>$clave = $valor</h4>";
}
// Orden descendente por clave
echo "<h3>Orden descendente por clave (krsort)</h3>";
krsort($capitales);

foreach ($capitales as $clave => $valor){

    echo "<h4>$clave = $valor</h4>";
}


?>




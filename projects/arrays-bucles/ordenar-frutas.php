<?php
$frutas =array("limon", "naranja", "banana", "albaricoque");

sort($frutas);

for ($i = 0; $i < count($frutas); $i++) {
    echo "<h1>$frutas[$i]</h1>";

}
?>
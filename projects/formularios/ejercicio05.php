<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
$dado = rand(0, 5);

    if ($dado == 0 ){

    echo "<img src=\"images/dado1.png\" />";

        } elseif ($dado == 1 ){

    echo "<img src=\"images/dado2.png\" />";

        } elseif ($dado == 2 ){

    echo "<img src=\"images/dado3.png\" />";

        } elseif ($dado == 3 ){

    echo "<img src=\"images/dado4.png\" />";

        } elseif ($dado == 4 ){

    echo "<img src=\"images/dado5.png\" />";

        } elseif ($dado == 5 ){

    echo "<img src=\"images/dado6.png\" />";
    }
?>
</body>
</html>
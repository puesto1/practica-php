<?php

echo "<h1>\$GLOBALS </h1>";
foreach ($GLOBALS as $key => $value){
    echo "$key : $value";
    echo "<br>";
    
    }

    echo "<h1>\$_SERVER </h1>";
    foreach ($_SERVER as $key => $value){
        echo "$key : $value";
        echo "<br>";
        
        }

        echo "<h1>\$_GET </h1>";
        foreach ($_GET as $key => $value){
            echo "$key : $value";
            echo "<br>";
            
            }

            echo "<h1>\$_POST </h1>";
            foreach ($_POST as $key => $value){
                echo "$key : $value";
                echo "<br>";
                
                }
 echo "<h1>\$_FILES </h1>";
foreach ($_FILES as $key => $value){
 echo "$key : $value";
 echo "<br>";
}

 echo "<h1>\$_COOKIE </h1>";
 foreach ($_COOKIE as $key => $value){
     echo "$key : $value";
     echo "<br>";
     
     }
                    
     echo "<h1>\$_SESSION </h1>";
     foreach ($_SESSION as $key => $value){
         echo "$key : $value";
         echo "<br>";
         
         }

         echo "<h1>\$_REQUEST </h1>";
         foreach ($_REQUEST as $key => $value){
             echo "$key : $value";
             echo "<br>";
             
             }
             echo "<h1>\$_ENV </h1>";
             foreach ($_ENV as $key => $value){
                 echo "$key : $value";
                 echo "<br>";
                 
                 }
?>
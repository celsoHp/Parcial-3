<?php
define("RUTA","/parcial3");
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewrport"  content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tile>Ejemplo 03</tile>
    
    </head>
    <body>
    <?PHP
        $valor = 5;
        echo "EL valor es: ".$valor."\n<br>"; 
         echo "EL valor es: $valor\n"; 
        echo RUTA;
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
        ?>
    </body>
</html>
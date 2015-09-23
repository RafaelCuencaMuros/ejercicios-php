<!DOCTYPE html>
<!--
Rafael Cuenca Muros
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "El total de la factura es ";
        echo round($_GET['baseImponible'] * 1.21, $precision = 2), " €.";
        ?>
    </body>
</html>
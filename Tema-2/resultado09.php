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
            $volumen = (1 / 3) * M_PI * $_GET['radio'] * $_GET['radio'] * $_GET['altura'];
            echo "El volumen del cono es ", round($volumen, $precision = 2);
        ?>
    </body>
</html>
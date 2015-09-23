<!DOCTYPE html>
<!--
Ejercicios Capítulo 1

Eercicio 9
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.

Rafael Cuenca Muros
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          $pesetas = 7500;
          echo $pesetas, " pesetas son ", round($pesetas / 166.386, $precision = 2), " euros.";
        ?>
    </body>
</html>

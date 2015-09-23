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
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
        
            echo $num1, " + ", $num2, " = ", $num1 + $num2, "<br>";
            echo $num1, " - ", $num2, " = ", $num1 - $num2, "<br>";
            echo $num1, " * ", $num2, " = ", $num1 * $num2, "<br>";
            echo $num1, " / ", $num2, " = ", $num1 / $num2, "<br>";
        ?>
    </body>
</html>
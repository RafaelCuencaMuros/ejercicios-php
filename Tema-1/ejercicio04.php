<!DOCTYPE html>
<!--
Ejercicios Capítulo 1

Eercicio 4
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.

Rafael Cuenca Muros
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<table>"
        ?>
        <tr>
          <th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th>
        </tr>
        <tr><td>DWES</td><td>DWEC</td><td>DWES</td><td>DWEC</td><td>DIW</td></tr>
        <tr><td>DWES</td><td>DWEC</td><td>DWES</td><td>DWEC</td><td>DIW</td></tr>
        <tr><td>DWES</td><td>DWEC</td><td>DWES</td><td>DWEC</td><td>DIW</td></tr>
        <tr><td colspan="5"><center>R E C R E O</center></td></tr>
        <tr><td>EINEM</td><td>DAW</td><td>HLC</td><td>EINEM</td><td>DIW</td></tr>
        <tr><td>DIW</td><td>DAW</td><td>HLC</td><td>EINEM</td><td>DWES</td></tr>
        <tr><td>DIW</td><td>DAW</td><td>HLC</td><td>EINEM</td><td>DWES</td></tr>
        <?php
        echo "</table>"
        ?>
    </body>
</html>

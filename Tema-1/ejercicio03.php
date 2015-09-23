<!DOCTYPE html>
<!--
Ejercicios Capítulo 1

Eercicio 3
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.

Rafael Cuenca Muros
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          echo "<table>";
        ?>
        <tr>
            <th>Español</th><th>Inglés</th>
        </tr>
        <tr>
            <td>Ordenador</td><td>Computer</td>
        </tr>
        <tr>
            <td>Pantalla</td><td>Screen</td>
        </tr>
        <tr>
            <td>Teclado</td><td>Keyboard</td>
        </tr>
        <tr>
            <td>Contraseña</td><td>Password</td>
        </tr>
        <tr>
            <td>Desarrollo web</td><td>Web development</td>
        </tr>
        <tr>
            <td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td>
        </tr>
        <tr>
            <td>Conocimiento</td><td>Knowledge</td>
        </tr>
        <tr>
            <td></td><td></td>
        </tr>  
        <?php
          echo "</table>";
        ?>
    </body>
</html>
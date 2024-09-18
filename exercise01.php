<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 1</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Ejercicio 1</h1>
        <?php
        $a = 2;
        $b = 12;

        $suma = $a + $b;
        $resta = $a - $b;
        $div = $a / $b;

        echo "<p>NUMERO 1: " . $a . "</p>";
        echo "<p>NUMERO 2: " . $b . "</p>";
        echo "<p>SUMA: " . $a . " + " . $b . " = " . $suma ."</p>";
        echo "<p>RESTA: " . $a . " - " . $b . " = " . $resta . "</p>";
        echo "<p>DIVISION: " . $a . " / " . $b . " = " . $div . "</p>";

        //cual es mayor y cual es menor
        if($a > $b) {
            echo "<p>El valor mayor es: " . $a . "</p>";
            echo "<p>El valor menor es: " . $b . "</p>";
        } elseif($a < $b) { 
            echo "<p>El valor mayor es: " . $b . "</p>";
            echo "<p>El valor menor es: " . $a . "</p>";
        } else { //si son iguales
            echo "<p>Son iguales, tienen el mismo valor</p>";
        }

        if($a && $b > 1) {
            $area = ($a * $b) / 2;
            echo "<p>El area del triangulo es " . $area . "cm</p>";
        }

        ?>
    </body>
</html>




<!DOCTYPE html>
<html lang="es">
    <head></head>
    <body>
        <h1>Exercise 3</h1>
        <?php
            $a = 15;
            $b = 10;
            echo "<p>Primera variable: " . $a . "</p>";
            echo "<p>Segunda variable: " . $b . "</p>";

            //muestra numeros pares desde 0 hasta la primera variable
            echo "<p>Progresión en números pares desde 0 hasta la primera variable ---> ";
            for($i = 0; $i <= $a; $i++) {
                if($i % 2 == 0) {
                    echo "" . $i . ",  ";
                }
            }
            echo "</p>";
    
            //muestra los numeros desde la segunda variable hasta 0
            $copiaB = $b;
            echo "<p>Progresión desde la segunda variable hasta 0 ---> ";
            while($copiaB >= 0) {
                echo $copiaB . ",  ";
                $copiaB--;
            }
            echo"</p>";

            //muestra la progresion de la primera a la segunda variable
            echo "<p>Progresión desde la primera a la segunda variable (si la segunda es más pequeña, se imprime una vez el valor de la primera) --->";
            if($b < $a) { //si la segunda variable es mas pequeña
                echo $a; //imprime 1 vez el valor de la primera
            } else {
                $copiaA = $a;
                do {
                    echo $copiaA . ", ";
                    $copiaA++;
                } while($copiaA <= $b);
            }
            echo "</p>";
            

        ?>
    </body>
</html>
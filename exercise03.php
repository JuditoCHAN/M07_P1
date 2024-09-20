<!DOCTYPE html>
<html lang="es">
    <head></head>
    <body>
        <h1>Exercise 3</h1>
        <?php
            $a = 6;
            $b = 15;
            echo "<p>Primera variable: " . $a . "</p>";
            echo "<p>Segunda variable: " . $b . "</p>";

            //muestra numeros pares desde 0 hasta la primera variable
            for($i = 0; $i <= $a; $i++) {
                if($i % 2 == 0) {
                    echo "<p>$i</p>";
                }
            }
    
            //muestra los numeros desde la segunda variable hasta 0
            $copiaB = $b;
            while($copiaB >= 0) {
                echo $copiaB . ",  ";
                $copiaB--;
            }
            echo"<br>";

            //muestra la progresion de la primera a la segunda variable
            if($b < $a) { //si la segunda variable es mas pequeña
                echo $a; //imprime 1 vez el valor de la primera
            } else {
                $copiaA = $a;
                do {
                    echo $copiaA . ", ";
                    $copiaA++;
                } while($copiaA <= $b);
            }
            

        ?>
    </body>
</html>
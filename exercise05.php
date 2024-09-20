<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Exercise 5</h1>
        <?php
        $totalSuma = 0;
        $pares = 0;
        $impares = 0;
        $arrayNums;
        while($totalSuma <= 100) {
            $num = rand(0, 20);
            $arrayNums[] = $num;
            $totalSuma += $num;
            if($num % 2 == 0) { //el 0 cuenta como par
                $pares++;
            }else {
                $impares++;
            }
        }

        for($i = 0; $i < count($arrayNums); $i++) {
            if($i != count($arrayNums)-1) {
                echo $arrayNums[$i] . " + ";
            } else { //en caso de estar en la ultima iteracion
                echo $arrayNums[$i] . " = ";
            }
        }

        echo $totalSuma . "<br>";
        echo "Pares: " . $pares ."<br>";
        echo "Impares: " . $impares ."<br>";

        ?>
    </body>
</html>
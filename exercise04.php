<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Exercise 4</h1>
        <?php
        $dado = rand(1, 6);

        switch($dado) {
            case 1: 
                echo "EL DADO VALE 1 (UNO)";
                echo "<br>VALOR CARA OPUESTA: 6 (SEIS)";
                break;
            case 2:
                echo "EL DADO VALE 2 (DOS)";
                echo "<br>VALOR CARA OPUESTA: 5 (CINCO)";
                break;
            case 3:
                echo "EL DADO VALE 3 (TRES)";
                echo "<br>VALOR CARA OPUESTA: 4 (CUATRO)";
                break;
            case 4:
                echo "EL DADO VALE 4 (CUATRO)";
                echo "<br>VALOR CARA OPUESTA: 3 (TRES)";
                break;
            case 5:
                echo "EL DADO VALE 5 (CINCO)";
                echo "<br>VALOR CARA OPUESTA: 2 (DOS)";
                break;
            case 6:
                echo "EL DADO VALE 6 (SEIS)";
                echo "<br>VALOR CARA OPUESTA: 1 (UNO)";
                break;
        }

        ?>
    </body>
</html>
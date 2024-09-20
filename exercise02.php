<!DOCTYPE html>
<html lang="es">
    <head></head>
    <body>
        <h1>Exercise 2</h1>
        <?php
        $num = 9;
        echo "<p>Número: " . $num . "</p>";

        switch ($num) {
            case 1:
                echo "<p>El número se corresponde con el LUNES</p>";
                break;
            case 2:
                echo "<p>El número se corresponde con el MARTES</p>";
                break;
            case 3:
                echo "<p>El número se corresponde con el MIÉRCOLES</p>";
                break;
            case 4:
                echo "<p>El número se corresponde con el JUEVES</p>";
                break;
            case 5:
                echo "<p>El número se corresponde con el VIERNES</p>";
                break;
            case 6:
                echo "<p>El número se corresponde con el SÁBADO</p>";
                break;
            case 7:
                echo "<p>El número se corresponde con el DOMINGO</p>";
                break;
            default:
                echo "<p>El número no se corresponde con ningún día</p>";
        }

        ?>
    </body>
</html>
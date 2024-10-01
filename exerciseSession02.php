<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio sessions 2</title>
</head>
<body>
    <?php

    if(isset($_SESSION["nums"])) {
        if(isset($_POST["modify"])){
            $pos = $_POST["position"];
            $_SESSION["nums"][$pos] = $_POST["new_value"];
        }

        if(isset($_POST["average"])){
            $avg = true;
        }

        if(isset($_POST["reset"])){
        }
        
    } else { //si no existe el array (1a vez que carga la página)
        $_SESSION["nums"] = array(10, 20, 30);
    }
    ?>

    <h1>Modify array saved in session</h1>
    
    <form action="" method="post">
        <label for="position">Position to modify: </label>
        <select name="position" id="position" required>
            <?php
                for($i = 0; $i < count($_SESSION["nums"]); $i++) {
                    echo "<option value=$i>$i</option>";
                }
            ?>
        </select>
        
        <br><br>
        <label for="new_value">New value: </label>
        <input type="number" name="new_value" id="new_value" min="0" max="999" required>        
        
        <button type="submit" name="modify">Modify</button>
        <button type="submit" name="average">Average</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <p>Current array: <?php foreach($_SESSION["nums"] as $num){echo $num . ", ";}?></p>
    <p>Average: <?php echo array_sum($_SESSION["nums"])/count($_SESSION["nums"])?></p> <!-- con array_sum() suma los valores del array -->
</body>
</html>
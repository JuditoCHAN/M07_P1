<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio sessions 3</title>
    <style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    $add = false;
    $pos = 0; //posicion para saber que fila del array imprimir

    if(isset($_SESSION["shoppingList"])) {
        if(isset($_POST["add"])) {
            $_SESSION["shoppingList"][] = ["name" => $_POST["name"], "quantity" => $_POST["quantity"], "price" => $_POST["price"], "cost" => $_POST["quantity"] * $_POST["price"]];
            $add = true;
            $pos = count($_SESSION["shoppingList"]) - 1;
        }
    } else { //si no existe el array (1a vez que carga la pag)
        $_SESSION["shoppingList"] = [];
    }

    ?>
    <h1>Shopping list</h1><br>
    
    <form action="" method="post">
        <label for="name">name: </label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="quantity">quantity: </label>
        <input type="number" name="quantity" id="quantity" required><br><br>

        <label for="price">price: </label>
        <input type="number" name="price" id="price" required><br><br>

        <button type="submit" name="add">Add</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <br><br>
    <table>
        <tr>
            <th>name</th>
            <th>quantity</th>
            <th>price</th>
            <th>cost</th>
            <th>actions</th>
        </tr>
        <?php 
            if($add) {
                for($i = 0; $i < count($_SESSION["shoppingList"]); $i++) {
                    echo "<tr>
                    <td>{$_SESSION['shoppingList'][$i]['name']}</td>
                    <td>{$_SESSION['shoppingList'][$i]['quantity']}</td>
                    <td>{$_SESSION['shoppingList'][$i]['price']}</td>
                    <td>{$_SESSION['shoppingList'][$i]['cost']}</td>
                    </tr>";
                }
                
            }
        ?>
        <tr>
            <th colspan="3">Total:</th>
            <td>0</td>
            <td><button type="submit" name="calculateTotal">Calculate total</button></td>   
        </tr>
    </table>

</body>
</html>
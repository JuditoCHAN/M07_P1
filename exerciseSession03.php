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
    $showTotalSum = false;
    $editItem = false;

    if(isset($_SESSION["shoppingList"])) {
        if(isset($_POST["addItem"])) {
            $_SESSION["shoppingList"][] = ["name" => $_POST["name"], "quantity" => $_POST["quantity"], "price" => $_POST["price"], "cost" => $_POST["quantity"] * $_POST["price"]];
            $add = true; //se usa para imprimir el mensaje cuando añades un item
        }

        if(isset($_POST["deleteItem"])) {
            $indexDelete = $_POST["deleteItem"];
            //unset($_SESSION["shoppingList"][$index_delete]);
            array_splice($_SESSION["shoppingList"], $indexDelete,1); //reordena indices, unset() no
        }

        if(isset($_POST["calculateTotal"])) {
            $totalSum = 0;
            foreach($_SESSION["shoppingList"] as $item) {
                $totalSum += $item["cost"];
            }
            $showTotalSum = true;
        }

        if(isset($_POST["editItem"])) {
            $indexEdit = $_POST["editItem"];
            $editItem = true;
        }
    
    } else { //si no existe el array (1a vez que carga la pag)
        $_SESSION["shoppingList"] = [];
    }

    ?>
    <h1>Shopping list</h1><br>
    
    <form action="" method="post">
        <label for="name">name: </label>
        <input type="text" name="name" id="name" value="<?php 
            if($editItem) { //si el usuario ha pulsado el botón "edit"
                echo "" . $_SESSION["shoppingList"][$indexEdit]["name"];
            } else {
                echo "";
            }
        ?>" required><br><br>

        <label for="quantity">quantity: </label>
        <input type="number" name="quantity" id="quantity" value="<?php 
            if($editItem) { //si el usuario ha pulsado el botón "edit"
                echo "" . $_SESSION["shoppingList"][$indexEdit]["quantity"];
            } else {
                echo "";
            }
        ?>" required><br><br>

        <label for="price">price: </label>
        <input type="number" name="price" id="price" value="<?php 
            if($editItem) { //si el usuario ha pulsado el botón "edit"
                echo "" . $_SESSION["shoppingList"][$indexEdit]["price"];
            } else {
                echo "";
            }
        ?>" required><br><br>

        <button type="submit" name="addItem">Add</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="resetSession">Reset</button>
    </form>

    <br>
    <div style="color: limegreen;">
    <?php if($add) {
        echo "Item added properly.";
        }
    ?>
    </div>

    <br>
    <table>
        <tr>
            <th>name</th>
            <th>quantity</th>
            <th>price</th>
            <th>cost</th>
            <th>actions</th>
        </tr>
        <?php 
            for($i = 0; $i < count($_SESSION["shoppingList"]); $i++) {
                echo "<tr>
                <td>{$_SESSION['shoppingList'][$i]['name']}</td>
                <td>{$_SESSION['shoppingList'][$i]['quantity']}</td>
                <td>{$_SESSION['shoppingList'][$i]['price']}</td>
                <td>{$_SESSION['shoppingList'][$i]['cost']}</td>
                <td><form method='post'><button type='submit' name='editItem' value='$i'>Edit</button> <button type='submit' name='deleteItem' value='$i'>Delete</button></form></td>
                </tr>";
            }
        ?>
        <tr>
            <th colspan="3">Total:</th>
            <td><?php
                if($showTotalSum) {
                    echo "" . $totalSum;
                } else {
                    echo "0";
                }
            ?>
            </td>
            <td><form action="" method="post"><button type="submit" name="calculateTotal">Calculate total</button></form></td>   
        </tr>
    </table>

</body>
</html>
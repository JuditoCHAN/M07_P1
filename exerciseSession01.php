<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio sessions</title>
</head>
<body>
    <?php
    //if($_SERVER["REQUEST_METHOD"] == "GET") {
    $error_quantity = 0;

    if(isset($_SESSION["worker_name"])) { //la 1a vez que carga la pag no existirá la variable session y entrará en el else
        if(isset($_GET["add"])) {
            $_SESSION["worker_name"] = test_data($_GET["worker_name"]);
            $_SESSION["product"] = test_data($_GET["product"]);

            if($_SESSION["product"] == "soft_drink") { //strcmp() tmb se puede usar, diferencia mayus y minus
                $_SESSION["soft_drinks"] += $_GET["product_quantity"];
            }
            if($_SESSION["product"] == "milk") {
                $_SESSION["milk"] += $_GET["product_quantity"];
            }
        }
    
        if(isset($_GET["remove"])) {
            $_SESSION["worker_name"] = test_data($_GET["worker_name"]);
            $_SESSION["product"] = test_data($_GET["product"]);

            if($_SESSION["product"] == "soft_drink") { 
                if($_GET["product_quantity"] > $_SESSION["soft_drinks"]) { //si se intentan eliminar más unidades de las que hay...
                    $error_quantity = 1;
                } else {
                    $_SESSION["soft_drinks"] -= $_GET["product_quantity"];
                }
            }
            if($_SESSION["product"] == "milk") {
                if($_GET["product_quantity"] > $_SESSION["milk"]) {//si se intentan eliminar más unidades de las que hay...
                    $error_quantity = 2;
                } else {
                    $_SESSION["milk"] -= $_GET["product_quantity"];
                }
            }
        }
    
        if(isset($_GET["reset"])) {
            $_SESSION["worker_name"] =  $_SESSION["product"] = "";
            $_SESSION["soft_drinks"] = 0;
            $_SESSION["milk"] = 0;
        }

    } else { //aqui se entra la 1a vez que se carga la página, y se inicializan las variables session (ya que se usan en el form)
        $_SESSION["worker_name"] =  $_SESSION["product"] = "";
        $_SESSION["soft_drinks"] = 0;
        $_SESSION["milk"] = 0;
    }


    function test_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


    <!-- FORMULARIO -->
    <h1>Supermarket management</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
        <label for="worker_name">Worker name:</label>
        <input type="text" name="worker_name" id="worker_name" value="<?php echo $_SESSION["worker_name"];?>" required>

        <label for="product_list"><h2>Choose a product:</h2></label>
        <select name="product" id="product_list" required>
            <option value="soft_drink">Soft Drink</option>
            <option value="milk">Milk</option>
        </select>

        <label for="product_quantity"><h2>Product quantity:</h2></label>
        <input type="number" name="product_quantity" id="product_quantity" min="0" max="999" value="1" required>
        
        <button type="submit" name="add">add</button>
        <button type="submit" name="remove">remove</button>
        <button type="submit" name="reset">reset</button>
    </form>

    <div style="color: red"><?php if($error_quantity != 0) {
        if($error_quantity == 1) {
            echo "You can't remove more units of <b>soft drink</b> than there are in the inventary!";
        } 
        if($error_quantity == 2) {
            echo "You can't remove more units of <b>milk</b> than there are in the inventary!";
        }
    }
    ?></div>

    <h2>Inventary:</h2>
    <p>worker: <?php echo $_SESSION["worker_name"];?></p>
    <p>units milk: <?php echo $_SESSION["milk"];?></p>
    <p>units soft drink: <?php echo $_SESSION["soft_drinks"];?></p>
    
</body>
</html>
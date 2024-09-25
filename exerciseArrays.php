<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Exercise Arrays</h1>
        <?php
        //Crear array asociativo
        $datos = array("Nombre" => "Sara", "Apellido" => "Martínez", "Edad" => 23, "Ciudad" => "Barcelona");
        

        //Mostrar valores con foreach enumerandolos
        echo "<h2>Ejercicio 1</h2>";
        $cont = 1;
        foreach($datos as $key => $value) {
            echo "dato " . $cont . "º: " . $value . "<br>";
            $cont++;
        }

        //-----------------------------------------------------------------------------------------------------
        //Mostrar valores con foreach mostrando la llave y el valor
        echo"<br><h2>Ejercicio 2</h2>";
        function mostrarDatos($datos) { //hago función para usarla en el ejercicio siguiente
            foreach($datos as $key => $value) {
                echo "" . $key . ": " . $value . "<br>";
            }
        }
        mostrarDatos($datos);

        
        //-----------------------------------------------------------------------------------------------------
        //Modificar la edad a 24 y volver a mostrar el array
        echo "<br><h2>Ejercicio 3</h2>";
        $datos["Edad"] = 24;
        mostrarDatos($datos);


        //-----------------------------------------------------------------------------------------------------
        //Borrar la ciudad y mostrar la info con var_dump:
        echo "<br><h2>Ejercicio 4</h2>";
        unset($datos["Ciudad"]); //== $array_splice($datos, 3, 1) indicas el indice y cuantos elementos quieres borrar
        var_dump($datos);
        echo "<br>";


        //-----------------------------------------------------------------------------------------------------
        //crear array con valores separados por comas a partir del string $letters = “a,b,c,d,e,f” (usando la función explode)
        echo "<br><h2>Ejercicio 5</h2>";
        $letters = "a,b,c,d,e,f";
        $arrayLetters = explode(",", $letters); //explode() crea un array a partir de un string usando el separador indicado como 1er argumento
        //en el 2do argumento le pasas el string, y en el último (opcional) le indicas 0 si quieres un solo elemento, -1-2,-3... si quieres
        //eliminar los últimos elementos del string, y 1,2,3... dependiendo del num de elementos que quieres poner en el array
        
        for($i = count($arrayLetters)-1; $i >= 0; $i--) { //count($array)-1 pq el ultimo index es 5, no 6
            echo "letter " . ($i + 1) . "º: " . $arrayLetters[$i] . "<br>";
        }


        //-----------------------------------------------------------------------------------------------------
        //crear array asociativo con las notas y mostrarlas de mayor a menor
        //Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
        echo "<br><h2>Ejercicio 6</h2>";
        $arrayNotas = array("Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
        arsort($arrayNotas); //ordena segun valor (no segun key), en orden descendiente
        echo "Notas de los estudiantes: ";

        foreach($arrayNotas as $key => $value) {
            echo "" . $key . ": " . $value . "  ";
        }


        //-----------------------------------------------------------------------------------------------------
        //calcula la media de las notas y muestrálas con 2 decimales. Además, mostrar los alumnos con notas por encima de la media
        echo "<br><br><h2>Ejercicio 7</h2>";
        $sumaNotas = 0;
        foreach($arrayNotas as $key => $value) {
            $sumaNotas += $value;
        }

        $media = $sumaNotas / count($arrayNotas);
        echo "Media de las notas: " . number_format($media, 2) . "<br>"; //tambien se podría usar printf en vez de number_format
        echo "Alumnos con nota por encima de la media: <br>";
        $notasMayoresMedia = [];
        foreach($arrayNotas as $key => $value) {
            if($value > $media) {
                array_push($notasMayoresMedia, $key);
            }
        }

        //muestro las notas mayores a la media
        foreach($notasMayoresMedia as $key) {
            echo "" . $key . "<br>";
        }


        //-----------------------------------------------------------------------------------------------------
        //busca la nota más alta y muestrala junto con el nombre
        echo "<br><br><h2>Ejercicio 8</h2>";
        $notaMasAlta = 0;
        foreach($arrayNotas as $key => $value) {
            if($value > $notaMasAlta)
        }

        ?>
    </body>
</html>
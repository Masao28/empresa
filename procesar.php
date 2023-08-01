
<?php

$numero = isset($_GET['numero']) ? $_GET['numero'] : 0; //Número ingresado por el usuario
$data = array(); //Arreglo para almacenar los datos por color
echo "<h3>Resultado:</h3>";
for ($i = 1; $i <= $numero; $i++) {
    $color = "black"; //Color negro por defecto
    
    echo $i.",";
    
    //Verificar si el número es múltiplo de 3, 5 o 7
    if ($i % 3 == 0) {
        $color = "green"; //Setear color verde
    }
    if ($i % 5 == 0) {
        $color = "red"; //Setear color rojo
    }
    if ($i % 7 == 0) {
        $color = "blue"; //Setear color azul
    }

    //Agregar el número al arreglo con el color correspondiente
    $data[$color][] = $i;
}

//Mostrar los datos divididos por color
echo "<h3>Números múltiplos de 3 en verde:</h3>";
echo "<span style='color:green'>" .implode(", ", $data['green']). "</span> ";

echo "<h3>Números múltiplos de 5 en rojo:</h3>";
echo "<span style='color:red'>" .implode(", ", $data['red']). "</span> ";

echo "<h3>Números múltiplos de 7 en azul:</h3>";
echo "<span style='color:blue'>" .implode(", ", $data['blue']). "</span> ";
echo"<br><br>Masao Yael Galindo Alvarado";

?>   
     


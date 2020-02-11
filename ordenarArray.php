<?php 

$numeros = [5, 88, 90, 7, 2, 234, 55];
// ordenando asc
sort($numeros);

// ordenando desc
rsort($numeros);

$num = 20;
$charNum = '20';

//condicion if else
if ($num === $charNum) {
    echo "Son de igual valor, y del mismo tipo";
} else {
    echo "Son de igual valor, pero distinto tipo";
}

$wil = ['Nombre' => 'Williams', 'Telefono' => '76527336', 'Pais' => 'Bolivia', 'Edad' => 26];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorrer Array</title>
</head>
<body>
    <h1>Dias de la semana</h1>
    <ul>
        <?php 
            foreach($numeros as $item){
                echo '<li>' . $item . '</li>';
            }
        ?>
    </ul>
    <h1>Datos persona</h1>
    <ul>
        <?php 
            foreach($wil as $dato => $value){
                echo '<li>' . $dato . ': ' . $value . '</li>';
            }
        ?>
    </ul>
</body>
</html>
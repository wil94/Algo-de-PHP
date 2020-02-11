<?php 

$dias = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

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
            foreach($dias as $dia){
                echo '<li>' . $dia . '</li>';
            }
        ?>
    </ul>
</body>
</html>
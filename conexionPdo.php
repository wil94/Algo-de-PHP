<?php 

try {
    
    $conexion = new PDO('mysql:host=localhost;dbname=carstore', 'root', '');
    //echo "conexion exitosa";

    //metodo query (Ejecutara cualquier query que se le mande)
    echo "Metodo Query" . '<br/>';
    $resultados = $conexion->query('SELECT * FROM vehicle');
    foreach($resultados as $fila) {
       echo $fila['sub_name'] . ' - ' . $fila['id_year'] . '<br/>';
    }

    // prepared statements
    echo "Metodo Prepared statements" . '<br/>';
    $statement = $conexion->prepare('SELECT id_year, sub_name FROM vehicle');
    $statement->execute();
    $resultadosPS = $statement->fetchAll();

    foreach($resultadosPS as $vehicle) {
        echo $vehicle['id_year'] . ' - ' . $vehicle['sub_name'] . '<br/>';
    }

    // ambos metodos traen informacion de la tabla vehicle en la base de datos carstore.
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
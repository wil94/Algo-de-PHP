<?php 

// los parametros recibidos deben ser con $ como variables comunes
// metodo
function saludarPersona ($nombre) {
    echo 'Hola, ' . $nombre . '<br/>';
}
//invocando saludarPersona
saludarPersona('Williams');

//funcion
function perimetroCuadrado ($lado) {
    return $lado * 4;
}
//invocando perimetroCuadrado
echo perimetroCuadrado(25) . '<br/>';

//funciones php

$texto = ' < > & "" ';
// funcion para evitar inyeccion de codigo, caracteres html los mostrara tal cual, y no interpretara html.
//echo htmlspecialchars($texto);
$texto2 = '  Hola ';
$Nombre = 'Williams';
// elmina espacios al pirncipio y al final
echo trim($texto2) . '<br/>';
// contando el numero de caracteres
echo strlen($texto2) . '<br/>';
// cortando un string
echo substr($texto2, 2, 5) . '<br/>';
// mayusculas
echo strtoupper($Nombre) . '<br/>';
// minusculas
echo strtolower($Nombre) . '<br/>';
// buscando la posicion de una letra
echo strpos($Nombre, 'a') . '<br/>';

//extrayendo en variables elementos de un array asociativo
$arr = ['Persona' => 'Williams', 'Edad' => 26, 'Telefono' => '76527336', 'Pais' => 'Bolivia'];
extract($arr);
echo $Pais;

// invirtiendo un array
$dias = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes'];
$diasReverse = array_reverse($dias);
// los elementos de un array se volveran una cadena uniendose por coma en cada elemento unido
echo join (', ', $diasReverse);

?>
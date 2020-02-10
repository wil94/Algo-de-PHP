<?php

$NOMBRE = "Williams";
//constantes, no pueden redefinir su valor, una constante puede llamarse igual que una
//variable pero ocupan diferentes espacios en memoria
// forma de definir una variable
define('PI', 3.14);
define('NOMBRE', "Williams");
$NOMBRE = "Roger";
echo PI;
// Imprimiendo Roger
echo $NOMBRE;
// Imprimiendo constante Williams
echo NOMBRE;

?>
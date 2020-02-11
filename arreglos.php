<?php 
// declaracion 1 de array
$dias = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$primerDia = $dias[0];
$primerDia = 'Domingo';
echo $primerDia . '<br/>';
// declaracion 2 de array
$personas = ['Williams', 'Eduardo', 'Cristian'];
echo $personas[1] . '<br/>';
//array puede tener distintos tipos de dato
$cosas = ['2', 2, true];
echo gettype($cosas[0]) . '<br/>';
echo gettype($cosas[1]) . '<br/>';
echo gettype($cosas[2]) . '<br/>';
//arreglos por asociacion, indicamos por referencia cual sera el valor al momento de declarar un array,
//y su referencia asoiativa
$persona = ['Nombre' => 'Williams', 'Edad' => 26, 'Telefono' => '76527336'];
echo $persona['Nombre'] . '<br/>';
//echo $persona[0] . '<br/>';
echo $persona['Edad'] . '<br/>';
//echo $persona[1] . '<br/>';
echo $persona['Telefono'] . '<br/>';
//echo $persona[2] . '<br/>';

//arreglos bidimensionales
$alumnosCurso = [ [30, 31, 32], [28, 27, 34], [24, 22, 12] ];
// print elemento con valor 34
echo $alumnosCurso[1][2] . '<br />';

//contando el numero de elementos de un array
// 7 elementos en el array dias
echo count($dias) . '<br />';
//ultimo elemento
$lastDay = $dias[count($dias) - 1];
echo $lastDay . '<br />';
?>
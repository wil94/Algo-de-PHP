<?php

function suma ($numA, $numB) {
    return $numA + $numB;
}

// include traera el archivo de la vista, en caso de algun error, se ejecutara el resto del programa.
//include 'vista.php';

// require traera el archivo de la vista, en caso de algun error, NO se ejecutara el resto del programa.
//require 'vistas.php';

// include_once y require_once; traeran el archivo indicado una sola vez, por mas que las llamemos varias veces.
//include_once 'vista.php';
require_once 'vista.php';

?>
<?php

require 'app.php';

//incluirTemplate recibe un nombre como parámetro
//usa ese nombre para armar la ruta de un archivo PHP dentro de includes/templates/
//incluye ese archivo en el script actual como include
//Le añadimos la variable '$inicio' y la inicializamos con false por default
//Especificamos el tipo de parámetros para evitar errores
function incluirTemplate( string $nombre, bool $inicio = false ){
    include TEMPLATES_URL . "/${nombre}.php";
}

?>
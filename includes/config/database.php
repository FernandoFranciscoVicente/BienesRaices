<?php

function conectarDB() : mysqli{
    // ip o nombre local / usuario / contraseña / nombre de la BD a conectar
    $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');

    if(!$db){
        echo "Error, no se pudo conectar";
        exit;
    }

    //Retorna una instancia de la conexión
    return $db;
}




<?php

function conectarBD(): mysqli
{
    // conectar base de datos
    // localhost = servidor de base de datos
    // root = usuario de base de datos
    // '' = contraseña de base de datos
    // bienes_raices = nombre de la base de datos
    $db = mysqli_connect('localhost', 'root', '', 'bienes_raices');
    // verificar conexión
    if (!$db) {
        echo 'Error de conexión a la base de datos';
        // se usa por seguridad para que no se muestre el error en el navegador
        exit;
    }
    // else{
    //     echo 'Conexión exitosa';
    // }
    return $db;
}

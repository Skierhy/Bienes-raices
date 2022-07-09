<?php

require 'app.php';
function incluir_Template(string $nombre, bool $inicio = false)
{
    // los difine no se ponen en comillas solamente se concatena
    include TEMPLATES_URL . "/${nombre}.php";
}


function estaAutenticado(): bool
{
    session_start();
    $auth = $_SESSION['login'];
    if ($auth) {
        return true;
    }
    return false;
}

<?php
// LLAVE Y VALOR
// nombre y la url donde esta los archivos
// lo que hace dir es agarra toda la dirrecion completa para que php sepa donde va usar los template
// una ruta mas especifica muy especifica debe que ser asi
// para que sepa donde buscarlos
// para codigo portable
define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
// require 'app.php';
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

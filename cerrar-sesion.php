<?php

// siempre usar iniciar sesion para que no se muestre el error de sesion no iniciada
session_start();

// var_dump($_SESSION);
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

// para cerrar session_start();

$_SESSION = [];

header('Location: /');

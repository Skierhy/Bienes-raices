<?php
// importar la conexion
require 'includes/config/database.php';
$db = conectarBD();

// crear un email y password

$email = "correo@correo.com";
$password = "123456";

// hashear el password
$password_hash = password_hash($password, PASSWORD_DEFAULT);


// query para para crear el usuario
// '' PARA STRING
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '{$password_hash}')";




mysqli_query($db, $query);

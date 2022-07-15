<?php
// archivo principal de la aplicacion
require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

// uso de autoload
use App\Propiedad;


// instancia de la clase Propiedad
$propiedad = new Propiedad();

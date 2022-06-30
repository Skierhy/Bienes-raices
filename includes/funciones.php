<?php

require 'app.php';
    function incluir_Template(string $nombre, bool $inicio =false){
        // los difine no se ponen en comillas solamente se concatena
        include TEMPLATES_URL . "/${nombre}.php";
    }
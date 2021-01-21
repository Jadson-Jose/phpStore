<?php

// abrir sessão

use core\classes\Database;

session_start();

// carregar o config
require_once('../config.php');

// carrega todas as classes do projeto 
require_once('../vendor/autoload.php');


$db = new Database();
$clientes = $db->select("SELECT * FROM clientes");
echo '<pre>';
print_r($clientes);

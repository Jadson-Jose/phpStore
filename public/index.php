<?php

use core\classes\Database;
use core\classes\Functions;

// abrir sessão
session_start();

// carregar o config
require_once('../config.php');

// carrega todas as classes do projeto 
require_once('../vendor/autoload.php');

$a = new Database();
$b = new Functions();

$b->teste();

echo 'OK';

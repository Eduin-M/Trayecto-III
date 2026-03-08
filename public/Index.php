<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Cargar variables de entorno 
// (EL .ENV , asi no estamos con el peo de que cada quien tiene una mrd distinta)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

use App\Router;

$app = new Router();
$app->run();
<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\RankingController;

$router = new Router();

$router->get('/', [RankingController::class, 'index']);
$router->post('/', [RankingController::class, 'index']);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
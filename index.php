<?php 
namespace App;
require_once './vendor/autoload.php';
use MiladRahimi\PhpRouter\Router;
use App\Controllers\PageController;
use App\Controllers\IndexController;

$controller = new PageController();
$router = Router::create();
$router->setupView(__DIR__ . './views');

$router->get('/', [IndexController::class, 'index'], 'index');
$router->get('/advantages', [PageController::class, 'advantages'], 'advantages');
$router->get('/contacts', [PageController::class, 'contacts'], 'contacts');
$router->post('/', [IndexController::class, 'sendForm'], 'send-form');
$router->dispatch();
<?php 
    namespace App;

    require_once './vendor/autoload.php';

    use MiladRahimi\PhpRouter\Router;
    use App\Controllers\IndexController;
    use App\Controllers\AdvantagesController;
    use App\Controllers\ContactsController;

    $router = Router::create();
    $router->setupView(__DIR__ . './views');


    
    $router->get('/', [IndexController::class, 'index'], 'index');
    $router->post('/', [IndexController::class, 'sendForm'], 'send-form');

    $router->get('/advantages', [AdvantagesController::class, 'index'], 'advantages');

    $router->get('/contacts', [ContactsController::class, 'index'], 'contacts');
    
    $router->dispatch();
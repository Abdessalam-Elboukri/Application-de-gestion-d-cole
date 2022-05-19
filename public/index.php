<?php

use app\controllers\AuthController;
use app\core\Application;
use app\controllers\SiteController;
use app\controllers\TestController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeLoad();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
    ];

$app = new Application(dirname(__DIR__), $config);


$app->router->get('/', [new SiteController(), 'home']);
$app->router->get('/dashboard', [new SiteController(), 'home']);
// // $app->router->get('/contact', [SiteController::class, 'contact']);
// $app->router->get('/contact', [new SiteController(), 'contact']);
// $app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->get('/students', [new SiteController(), 'students']);

$app->router->get('/classes', [new SiteController(), 'classes']);

$app->router->get('/profile', [new SiteController(), 'profile']);

$app->router->get('/login', [new SiteController(), 'login']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);


$app->router->get('/about', [TestController::class, 'about']);


$app->run();
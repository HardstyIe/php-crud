<?php require_once 'vendor/autoload.php';
session_start();

require_once 'Router.php';

use App\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();


$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

$router = new Router($requestUri, $requestMethod);
$router->route();

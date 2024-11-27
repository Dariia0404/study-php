<?php
require 'vendor/autoload.php';
$config = require 'config/controller.php';

use App\Core\Router;
$router = new Router($config);

$router->run();  

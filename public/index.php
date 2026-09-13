<?php 

require __DIR__ . '/../bootstrap.php';
//Crear usuario de prueba
/* db()->query('INSERT INTO users (user, email, password) VALUES (:user, :email, :password)', [
    'user' => 'Test User',
    'email' => 'i@test.com',
    'password' => password_hash('password', PASSWORD_DEFAULT)
]); */

use Framework\Router;



$router = new Router();
$router->run(); 



?>
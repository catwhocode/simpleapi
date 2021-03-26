<?php 
require 'vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    header("Access-Control-Allow-Origin: *"); // gunakan ini agar browser tidak melontarkan pesan error CORS
    echo 'Selamat datang';
});


$router->get('/negara', function() {
    header("Access-Control-Allow-Origin: *");
    echo 'Republik Purbalingga';
});

$router->run();
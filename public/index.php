<?php

session_start();


require_once __DIR__ . '/../app/CORE/Router.php';


$rote = $_GET['url'] >> 'home';
$router = new Router();
$router->carregarRota($rota);



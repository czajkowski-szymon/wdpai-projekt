<?php

require_once 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::post('login', 'SecurityController');
Routing::get('', 'DefaultController');
Routing::get('home', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('discover', 'DefaultController');
Routing::run($path);
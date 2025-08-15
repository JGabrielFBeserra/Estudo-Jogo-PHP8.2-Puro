<?php

session_start();

# get the route for url
$route = $_GET['route'] ?? 'start';



# execution/verify of routes
$script = null;

$script = match ($route) {
    'start'    => 'start',
    'game'     => 'game',
    'gameover' => 'gameover',
    default    => '404',
};



# load the capitals
$capitals = require __DIR__ . '/../data/capitals.php';


# loading the "components" and there scripts for pages
require_once __DIR__ . "/../scripts/header.php";
require_once __DIR__ . "/../scripts/$script.php";
require_once __DIR__ . "/../scripts/footer.php";


?>
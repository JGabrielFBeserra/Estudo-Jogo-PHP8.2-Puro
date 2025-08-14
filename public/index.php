<?php

session_start();

# get the route for url

$route = $_GET['route'] ?? 'start';

# execution/verify of routes

$script = null;

switch ($route) {
    case 'start':
        $script = 'start';
        break;
    case 'game':
        $script = 'game';
        break;
    case 'gameover':
        $script = 'gameover';
        break;
    default:
        $script = '404';
        break;
}



# load the capitals
$capitals = require __DIR__ . '/../data/capitals.php';

# loading the "components" and there scripts for pages
require_once __DIR__ . "/../scripts/header.php";
require_once __DIR__ . "/../scripts/$script.php";
require_once __DIR__ . "/../scripts/footer.php";


?>
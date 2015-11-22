<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//load and initialize any global librares
require_once 'model.php';
require_once 'controller.php';

//route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/Blog/index.php' == $uri) {
    list_action();
} elseif ('/Blog/index.php/show' == $uri && isset($_GET['id'])){
    show_action($_GET['id']);
} else {
    header ('Status: 404 Not found');
    echo '<html> <body> <h1> Page Not Found </h1> </body> </html>';
}

<?php

//ini_set('display_errors',1);
//ini_set('display_startup_errors',1);
//error_reporting(E_ALL);

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Debug\Debug;

Debug::enable();

$request = Request::createFromGlobals();

$uri = $request->getPathInfo();
if ('/' == $uri) {
    $response = list_action();
} elseif ('/show' == $uri && $request->query->has('id')){
    $response = show_action($request->query->get('id'));
} else {
    $html = '<hmtl><body><h1> Page Not Found </h1></body></html>';
    $response = new Response($html, Response::HTTP_NOT_FOUND);
    
}

//echo the headers and send the response
$response->send();

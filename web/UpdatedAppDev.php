<?php

use Symfony\Component\HttpFoundation\Request;

// Restrict access to local IPs in development mode.
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array($_SERVER['REMOTE_ADDR'] ?? '', ['127.0.0.1', '::1'])
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file.');
}

// Autoloader (Symfony 4+ uses Composer's autoloader)
require_once __DIR__.'/../vendor/autoload.php';

// Kernel (Symfony 4+ uses src/Kernel.php)
require_once __DIR__.'/../src/Kernel.php';

$kernel = new Kernel('dev', true); // Adjust for your environment
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);

<?php

require_once __DIR__ . '/silex.phar';

$app = new Silex\Application();


$app->get('/', function () use ($app) {
    return 'Welcome !';
});

$app->get('/hello', function () use ($app) {
    return 'Hello !';
});


$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app->run();
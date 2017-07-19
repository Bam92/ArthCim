<?php

$app->get('/', function () use ($app) {
    return $app['twig']->render('home.html.twig');
})->bind('home');

$app->get('/doctors', function () use ($app) {
    return $app['twig']->render('doctors.html.twig');
})->bind('doctors');

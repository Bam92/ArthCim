<?php

$app->get('/', function () use ($app) {
    return $app['twig']->render('home.html.twig');
})->bind('home');

<?php

$routes = array(
    'home'       => array('url' => '/', 'template'       => 'home.html.twig'), // home page
    'teach'      => array('url' => 'teach', 'template'   => 'teach.html.twig'),
    'bio'        => array('url' => 'bio', 'template'   => 'bio.html.twig'),
    'research'   => array('url' => 'research', 'template'   => 'research.html.twig'),
    'service'    => array('url' => 'service', 'template'   => 'service.html.twig'),
    'contact'    => array('url' => 'contact', 'template' => 'contact.html.twig')
);

foreach ($routes as $routeName => $data) {
    $app->get($data['url'], function() use($app, $data) {
        return $app['twig']->render($data['template']);
    })->bind($routeName);
}

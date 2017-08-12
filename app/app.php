<?php


use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1'
));
/*$app->register(new Silex\Provider\SecurityServiceProvider(), array(
	'security.firewalls' => array(
		'secured' =>array(
			'pattern' => '^/',
			'anonymous' => true,
			'logout' => true,
			'form' => array('login_path' => '/login', 'check_path' => '/login_check'),*/
			/*'users' => function () use ($app) {
				return new MicroCMS\DAO\userDAO($app['db']);
			},

		),
  ),
	'security.role_hierarchy' => array(
		'ROLE_ADMIN' => array('ROLE_USER'),
		),
	'security.access_rules' => array(
		array('^/admin', 'ROLE_SIGNED')
		)
	));
*/
//$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// Register services.
